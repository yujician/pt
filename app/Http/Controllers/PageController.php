<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Picture;
use App\Models\Profile;

class PageController extends Controller
{
    public function top()
    {
        // //$thumb_path = storage_path("app/thumb_images/");
        // $image_array = array();
        
        // $user_list = User::all();
        // //dd($user_list);
        // foreach ($user_list as $user){
        //     $picture = Picture::where('u_id',$user->id)->orderBy('id','desc')->first();
        //     //dd($picture);
        //     if($picture != null){
                
        //         $thumb = file_get_contents(storage_path("app/thumb_images/" . $picture->thumb_name));
        //     $p_info = pathinfo($picture->thumb_name);
        //     if($p_info['extension'] == "png" || $p_info['extension'] == "PNG"){
        //         $type = "data:images/png;base64,";
        //     }else{
        //         $type = "data:images/jpeg;base64,";
        //     }
        //     $image_array[] = array('id' => $user->id, 'user_name' => $user->name, 'img' => $type . base64_encode($thumb));
        //     }
        // }
        //dd($image_array);    
        // return view('contents.index',compact('image_array'));
        return view('contents.index');
    }
    
    public function showAlbum(Request $request)
    {
        //dd($request->u_id);
        $show_user_id = $request->u_id;
        $user = User::find($show_user_id);
        $user_name = $user->name;
        
        return view('contents.album',compact('show_user_id','user_name'));
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
        return view('ajax.list_only_guest',compact('data_list','tab_count','page_num'));
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
        $data = file_get_contents(storage_path("app/main_images/" . $image_file->file_name));
        $src = $type . base64_encode($data);
        $str = "<img src='$src' class='w-100' title='$image_file->title'>";
        
        return $str;
    }
    
}
