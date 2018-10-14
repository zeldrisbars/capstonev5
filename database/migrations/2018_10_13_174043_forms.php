<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Forms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->string('gendertitle')->nullable();
            $table->string('name')->nullable();
            $table->string('street')->nullable();
            $table->string('civil')->nullable();
            $table->string('purpose')->nullable();
            $table->string('reason1')->nullable();
            $table->string('reason2')->nullable();
            $table->string('age')->nullable();
            $table->string('dateissued')->nullable();
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
