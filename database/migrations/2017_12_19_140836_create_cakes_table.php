<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cakes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name',50);
            $table->char('base_type',50);
            $table->text('description');
            // $table->integer('category');
            $table->integer('in_storage')->default(0);
            $table->float('price',8,2)->nullable();
            $table->timestamps();
        });
        Artisan::call('db:seed',[
            '--class'=>'CakesSeeder',
            '--force'=>True
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cakes');
    }
}
