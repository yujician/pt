<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Picture;
use App\Models\Profile;
use App\Models\Admin;

class AdminController extends Controller
{
    //ユーザーリスト表示
    public function userList()
    {
        $user_list = User::all();

        return view('admin.user_list',compact('user_list'));
    }

    //user_list.blade.php から Ajax で呼出し
    public function userDelete(Request $request)
    {
        //print_r($request->all());
        $del_id = $request->delete_id;

        $pictures = Picture::where('u_id',$del_id)->get();
        foreach ($pictures as $pic){
            Storage::delete('main_images/' . $pic->file_name);
            Storage::delete('thumb_images/' . $pic->thumb_name);
        }
        Picture::where('u_id',$del_id)->delete();
        Profile::where('u_id',$del_id)->delete();
        User::destroy($del_id);

        return;
    }

    //user_list.blade.php から Ajax で呼出し
    public function userChange(Request $request)
    {
        //print_r($request->all());
        $c_id = $request->change_id;
        if($request->password == null){
          $request->validate([
              'name' => 'required|string|max:255',
          ]);
          $user = User::find($c_id);
          $user->name = $request->name;
          $user->save();
        }else{
          $request->validate([
              'name' => 'required|string|max:255',
              'password' => 'required|string|min:8',
          ]);
          $user = User::find($c_id);
          $user->name = $request->name;
          $user->password = Hash::make($request->password);
          $user->save();
        }
        return;
    }

    //管理者リスト表示
    public function adminList()
    {
        $admin_list = Admin::all();

        return view('admin.admin_list',compact('admin_list'));
    }
    
    //admin_list.blade.php から Ajax で呼出し
    public function adminDelete(Request $request)
    {
        //print_r($request->all());
        $del_id = $request->delete_id;
        Admin::destroy($del_id);
        
        return;
    }
    
    //admin_list.blade.php から Ajax で呼出し
    public function adminChange(Request $request)
    {
        //print_r($request->all());
        $c_id = $request->change_id;
        if($request->password == null){
            $request->validate([
                'name' => 'required|string|max:255',
            ]);
            $user = Admin::find($c_id);
            $user->name = $request->name;
            $user->save();
        }else{
            $request->validate([
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:8',
            ]);
            $user = Admin::find($c_id);
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();
        }
        return;
    }
    
    //管理者追加
    public function adminAdd(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required|string|min:8|email|unique:admins',
        ]);
        
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        
        return redirect(route('admin_list'));
    }
    
}
