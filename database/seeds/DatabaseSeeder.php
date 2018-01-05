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
        $n=[1,2,3,4,5];
        foreach( $n as $i){
            $user=factory(App\User::class)->create(['id'=>100+$i]);
        } 
        $chefs= factory(App\Chefs::class, 5)->create()->each(function($u){
            $cakes =factory(App\cakes::class, 4)->create()->each(function($u){
                $u->categories()->save(factory(App\Category::class)->create());
                $n=[1,2,3,4,5];
                foreach( $n as $i){
                    $comment=factory(App\Comment::class)->create(['user_id'=>100+$i,'cakes_id'=>$u->id]);
                    sleep(1);
                } 

                
            });
            $u->cakes()->saveMany($cakes);
        });

        $cart = factory(App\Cart::class,4)->create();
    }
}
