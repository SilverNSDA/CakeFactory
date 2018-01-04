<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Firstname',50)->charset('utf8');
            $table->string('Lastname',50)->charset('utf8');
            $table->string('Middlename',10)->charset('utf8')->nullable();
            $table->char('Title',5)->nullable();
            $table->char('Mobile',15)->nullable();
            $table->char('Home_phone',30)->nullable();
            $table->char('Fax',20)->nullable();
            $table->string('Address1',100)->charset('utf8')->nullable()->comment('address line 1: #,street,area');
            $table->string('Address2',100)->charset('utf8')->nullable()->comment('address line 2: city,zip,country');
            $table->timestamps();
        });
        // Artisan::call('db:seed',[
        //     '--class'=>'ChefSeeder',
        //     '--force'=>True
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chefs');
    }
}
