<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DB', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('CustomerName');
            $table->string('Address');
            $table->string('City');
            $table->string('PostalCode');
            $table->string('Country');

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
        Schema::dropIfExists('DB');
    }
}
