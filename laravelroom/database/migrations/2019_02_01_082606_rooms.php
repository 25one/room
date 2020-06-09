<?php

//use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();    
            $table->integer('price')->unsigned()->index();                      
            $table->integer('bedrooms')->unsigned()->index();            
            $table->integer('bathrooms')->unsigned()->index();     
            $table->integer('storeys')->unsigned()->index();     
            $table->integer('garages')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('rooms');        
    }
}
