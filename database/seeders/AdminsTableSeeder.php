<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; //追加
use App\Models\Admin;               //追加

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //追加 ここから
        $init_users = [
            [
                'name' => 'サイト管理者',
                'email' => 'yujician.sumi@gmail.com',
                'password' => 'P@ssw0rd99'
                
            ],
            
            // ここに追加できます
        ];
        
        foreach($init_users as $init_user) {
            
            $user = new Admin();
            $user->name = $init_user['name'];
            $user->email = $init_user['email'];
            $user->password = Hash::make($init_user['password']);
            $user->save();
            
        }
        //追加 ここまで
    }
}
