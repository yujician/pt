<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;
use Validator;

class MembersController extends Controller
{
  //ユーザープロファイル表示
  // public function modify()
  // {
  //       $user = Auth::user();
  //       $u_id = $user->id;
  //       $master_data = User::find($u_id);
  //       //dd($master_data->all());
  //       $sub_data = Profile::where('u_id', $u_id)->get();
  //       return view('contents.profile', ['master_data' => $master_data, 'sub_data' => $sub_data ]);
  // }

  public function modify(Request $request)
  {
      $u_id = $request->u_id;
      $master_data = User::find($request->u_id);
      $sub_data = Profile::where('u_id', $request->u_id)->get();
      return view('users.profile',compact('master_data','sub_data'));
  }
  

  //ユーザープロファイル変更
  public function userChange(Request $request)
  {
    if($request->input('change')){
      // dd($request->all());
      $user_data = User::find($request->u_id);
      if($user_data->name != $request->u_name){
        $user_data->name = $request->u_name;
        $user_data->save();
      }
      $check_data = Profile::where('u_id', $request->u_id)->get();
      //dd($sub_data->all());
      if(count($check_data) < 1){
        $sub_data = new Profile;
      }else{
        $id = $check_data[0]->id;
        $sub_data = Profile::find($id);
      }
        $sub_data->u_id = $request->u_id;
        $sub_data->company = $request->u_company_name;
        $sub_data->yubin = $request->u_yubin;
        $sub_data->addr1 = $request->u_addr1;
        $sub_data->addr2 = $request->u_addr2;
        $sub_data->addr3 = $request->u_addr3;
        $sub_data->tel = $request->u_tel;
        $sub_data->fax = $request->u_fax;
        $sub_data->biko = $request->biko;
        $sub_data->save();

      return redirect('dashboard')->with('flash_message', '登録情報を更新しました。');

    }elseif ($request->input('cancel')) {
        return redirect('dashboard');
    }
  }

}
