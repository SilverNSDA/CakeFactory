<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'id'=>1,
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin123'),
            'admin'=>1
        ]);
        DB::table('profiles')->insert([
            'id'=>1,
            'name'=>'admin',
            'selfIntroduction'=>'this is admin',
            'occupation'=>'i\'m an admin'
        ]);
        User::find(1)->profile()->save(Profile::find(1));
    }
}
