<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('club_id')->unique();
            $table->string('name');
            $table->text('introduction');
            $table->string('proprieter_name');
            $table->integer('proprieter_class');
            $table->integer('proprieter_grade');
            $table->integer('proprieter_qq');
            $table->text('achievements');
            $table->boolean('recruit');
            $table->string('email');
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
        Schema::dropIfExists('societies');
    }
}
