<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('location',255)->nullable();
            $table->text('description');
            $table->decimal('lat',8,6);
            $table->decimal('lng',9,6);
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')->onDelete('cascade');
            $table->bigInteger('organization_id')->unsigned();
            $table->foreign('organization_id')
                  ->references('id')
                  ->on('organizations')->onDelete('cascade');
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
        Schema::dropIfExists('messages');
    }
}
