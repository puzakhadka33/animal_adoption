<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('client_adoptions', function (Blueprint $table) {
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')->onDelete('cascade');
            $table->bigInteger('adoption_id')->unsigned();
            $table->foreign('adoption_id')
                  ->references('id')
                  ->on('adoptions')->onDelete('cascade');
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
        Schema::dropIfExists('clients');
        Schema::dropIfExists('client_adoptions');
    }
}
