<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')->onDelete('cascade');
            $table->bigInteger('organization_id')->unsigned();
            $table->foreign('organization_id')
                  ->references('id')
                  ->on('organizations')->onDelete('cascade');
            $table->string('name', 255);
            $table->string('color', 255);
            $table->string('height', 255);
            $table->string('weight', 255);
            $table->string('length', 255);
            $table->string('breed', 255);
            $table->string('image', 255);
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
        Schema::dropIfExists('animals');
    }
}
