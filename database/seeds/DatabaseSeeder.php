<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $cakes = factory(App\cakes::class, 20)->create()->each(function($u){
            $u->categories()->save(factory(App\Category::class)->create());
            $u->chef()->save(factory(App\Chefs::class)->create());
        });
    }
}
