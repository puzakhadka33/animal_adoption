<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('animal_id')->unsigned();
            $table->foreign('animal_id')
                  ->references('id')
                  ->on('animals')->onDelete('cascade');
            $table->bigInteger('organization_id')->unsigned();
            $table->foreign('organization_id')
                  ->references('id')
                  ->on('organizations')->onDelete('cascade');
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')->onDelete('cascade');
            $table->date('date');
            $table->text('description');
            $table->boolean('status' )->default(0);
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
        Schema::dropIfExists('adoptions');
    }
}
