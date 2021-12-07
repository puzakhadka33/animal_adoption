<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rule');
            $table->timestamps();

            $table->bigInteger('app_component_id')->unsigned();
            $table->foreign('app_component_id')->references('id')->on('app_components')->onDelete('cascade');
        });

        Schema::create('user_role_permission_rules', function(Blueprint $table){
            $table->bigInteger('permission_rule_id')->unsigned();
            $table->bigInteger('user_role_id')->unsigned();
            $table->foreign('permission_rule_id')->references('id')->on('permission_rules')->onDelete('cascade');
            $table->foreign('user_role_id')->references('id')->on('user_roles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_rules');
        Schema::dropIfExists('user_role_permission_rules');
    }
}
