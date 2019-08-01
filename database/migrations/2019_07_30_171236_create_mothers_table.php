<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMothersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mothers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('sh_shenasname');
            $table->date('birth_date');
            $table->text('birth_place');
            $table->text('birth_issued');
            $table->text('serial_shenasname');
            $table->text('horoof_shenasname');
            $table->text('sh_seri_shenasname');
            $table->text('father_name');
            $table->text('phone' , 11);
            $table->text('job');
            $table->boolean('is_farhangi')->default(false);
            $table->boolean('mother_register')->default(false);
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
        Schema::dropIfExists('mothers');
    }
}
