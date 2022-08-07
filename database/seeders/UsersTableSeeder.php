<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $init_users = [
            [
                'name' => ' すみ ',
                'email' => 'yujician.sumi@hotmail.co.jp',
                'password' => 'P@ssw0rd'

            ],
        ];
        foreach ($init_users as $init_user) {

            $user = new User();
            $user->name = $init_user['name'];
            $user->email = $init_user['email'];
            $user->password = Hash::make ($init_user['password']);
            $user->save();

        }

    }
}
