<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linkman_name');
            $table->integer('linkman_class');
            $table->integer('linkman_grade');
            $table->text('feeling');
            $table->text('process');
            $table->text('content');
            $table->date('date');
            $table->time('time');
            $table->text('assessment');
            $table->string('region');
            $table->integer('stars');
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
        Schema::dropIfExists('posts');
    }
}
