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
            $table->string('code_melli',10);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('sh_shenasname');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('birth_issued');
            $table->string('serial_shenasname',6);
            $table->string('horoof_shenasname');
            $table->string('sh_seri_shenasname');
            $table->string('father_name');
            $table->string('phone' , 11);
            $table->string('job');
            $table->boolean('is_farhangi')->default(false);
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
