<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('案例标题');
            $table->text('pic');
            $table->integer('fanganlist_id')->index();
            $table->text('content');
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
        Schema::dropIfExists('fangans');
    }
}
