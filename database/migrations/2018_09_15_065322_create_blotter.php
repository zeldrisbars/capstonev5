<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlotter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_blotters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('controlno')->nullable();
            $table->string('accused')->nullable();
            $table->string('contactnum')->nullable();
            $table->string('complainant');
            $table->string('datetime');
            $table->string('caseofincident');
            $table->text('detail');
            $table->string('status');
            $table->rememberToken();
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
        //
    }
}
