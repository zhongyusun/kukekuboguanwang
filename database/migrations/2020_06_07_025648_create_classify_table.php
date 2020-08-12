<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('introduce')->comment('分类介绍');
            $table->text('pic');
            $table->string('title');
            $table->text('keywords');
            $table->text('description');
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
        Schema::dropIfExists('classifies');
    }
}
