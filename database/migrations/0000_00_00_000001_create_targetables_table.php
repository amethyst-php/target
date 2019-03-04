<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateTargetablesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.target.data.targetable.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('target_id')->unsigned();
            $table->foreign('target_id')->references('id')->on(Config::get('amethyst.target.data.target.table'));
            $table->string('targetable_type');
            $table->integer('targetable_id')->unsigend();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.target.data.targetable.table'));
    }
}
