<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150)->charset('utf8');
            $table->datetime('dateOfBirth')->nullable();
            $table->string('selfIntroduction',250);
            $table->string('occupation',50);
            $table->integer('user_id')->default(-1);
            $table->timestamps();
        });
        Artisan::call('db:seed',[
            '--class'=>'UserSeeder',
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
        Schema::dropIfExists('profiles');
    }
}
