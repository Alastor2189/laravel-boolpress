<?php

use App\User;
use App\UserInfo;
use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_user_detail = new UserInfo();
        $new_user_detail->mail = 'g.lucafarci89@hotmail.com';
        $new_user_detail->phone = '3406767678';
        $new_user_detail->user_id = User::all()->first()->id;
        $new_user_detail->save();
    }
}
