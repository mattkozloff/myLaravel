<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantType', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('systemID');
            $table->char('plantName', 100);
            $table->integer('havestTimeInDays');
            $table->dateTimeTz('created_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
