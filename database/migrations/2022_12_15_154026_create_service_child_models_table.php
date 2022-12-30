<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceChildModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_child_models', function (Blueprint $table) {
            $table->increments('service_childID');
            $table->text('service_child_name')->nullable();
            $table->text('service_child_description')->nullable();
            $table->integer('service_child_parentID')->nullable();
            $table->integer('service_child_status')->nullable();
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
        Schema::dropIfExists('service_child_models');
    }
}
