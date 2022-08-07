<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class UserPicsController extends Controller
{
  //画像をストレージに保存 + サムネイル保存
  public function savepics(Request $request)
  {
    //dd($request->all());
    //画像チェック
    $params = $request->validate([
    'upFile' => 'required|file|image|max:500000',
    ]);
    $file = $params['upFile'];
    //保存用ディレクトリチェック
    if(!is_dir(storage_path("app/main_images"))){
      mkdir(storage_path("app/main_images"));
    }
    if(!is_dir(storage_path("app/thumb_images"))){
      mkdir(storage_path("app/thumb_images"));
    }
    //$main_path = "main_images";
    $image_path = storage_path("app/main_images/");
    $thumb_path = storage_path("app/thumb_images/");
    //$temp_name = $request->file('upFile')->store($main_path);
    $image = Image::make(file_get_contents($file->getRealPath()));
    $temp_name = $file->hashName();
    $image->resize(1600, 1600,function ($constraint) {
    $constraint->aspectRatio();})->save($image_path . $temp_name);
    $f_info = pathinfo($temp_name);
    $thumb_name = $f_info['filename'] . "_thumb." . $f_info['extension'];
    //dd($thumb_name);
    $image->resize(300, 300, function ($constraint) {
    $constraint->aspectRatio();})->save($thumb_path . $thumb_name);

    //dbに保存
    $data = new Picture;
    $data->u_id = $request->u_id;
    $data->file_name = $f_info['basename'];
    $data->thumb_name = $thumb_name;
    $data->save();

    return;

  }

  //サムネイルウインドウ生成 (Ajaxの戻り)
  public function getpics(Request $request)
  {
    //dd($request->all());
    $page_count = 24;
    $page_num = $request->page;
    //$thumb_path = storage_path("app/thumb_images/");
    $file_list = Picture::select('id','thumb_name','title')->where('u_id',$request->u_id)->orderBy('id', 'desc')->get();
    if(count($file_list) < 1){
      return;
    }
    //ページarray組み立て
    $page_array = array();
    $array_count = 0;
    $count = 0;
    for($i = 0; $i < count($file_list); $i++){
      $page_array[$array_count][$count] = $file_list[$i];
      $count++;
      if($count == $page_count){
        $count = 0;
        $array_count++;
      }
    }
    //dd($page_array[0]);

    $data_list = array();
    foreach ($page_array[$page_num] as $file) {
        $thumb = file_get_contents(storage_path("app/thumb_images/" .$file->thumb_name));
      $p_info = pathinfo($file->thumb_name);
      if($p_info['extension'] == "png" || $p_info['extension'] == "PNG"){
        $type = "data:images/png;base64,";
      }else{
        $type = "data:images/jpeg;base64,";
      }
      $data_list[] = array('id' => $file->id, 'img' => $type . base64_encode($thumb),'title' => $file->title);
    }
    $tab_count = count($page_array);
    return view('ajax.list_only',compact('data_list','tab_count','page_num'));
  }

  //拡大表示用マスター画像生成 (Ajaxの戻り)
  public function getmaster(Request $request)
  {
    //$main_path = storage_path("app/main_images/");
    $image_file = Picture::find($request->img_id);
    //dd($image_file);

    $p_info = pathinfo($image_file->file_name);
    if($p_info['extension'] == "png" || $p_info['extension'] == "PNG"){
      $type = "data:images/png;base64,";
    }else{
      $type = "data:images/jpeg;base64,";
    }
    $data = file_get_contents(storage_path("app/main_images/". $image_file->file_name));
    $src = $type . base64_encode($data);
    $str = "<img src='$src' class='w-100' title='$image_file->title'>";

    return $str;
  }

  //画像タイトル設定 (Ajaxからの呼び出し)
  public function savetitle (Request $request)
  {
    //dd($request->all());
    $image_file = Picture::find($request->save_id);
    $image_file->title = $request->title;
    $image_file->save();

    return;
  }

  //画像削除 (Ajaxからの呼び出し)
  public function deletepic (Request $request)
  {
    //dd($request->all());
    $image_file = Picture::find($request->delete_id);
    $main = $image_file->file_name;
    $thumb = $image_file->thumb_name;
    Storage::delete('main_images/' . $main);
    Storage::delete('thumb_images/' . $thumb);
    Picture::destroy($request->delete_id);

    return;
  }

}
