<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role')->nullable();$table->string('gender')->nullable();
            $table->string('civil')->nullable();
            $table->string('age')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('votersno')->nullable();
            $table->string('yearsres')->nullable();
            $table->string('street')->nullable();
            $table->string('barangay')->nullable();
            $table->string('cityprovince')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('sitio')->nullable();
            $table->string('mlast')->nullable();
            $table->string('mfirst')->nullable();
            $table->string('mmiddle')->nullable();
            $table->string('flast')->nullable();
            $table->string('ffirst')->nullable();
            $table->string('fmiddle')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('religion')->nullable();
            $table->string('hno')->nullable();
            $table->string('hrel')->nullable();
            $table->string('sib')->nullable();
            
            $table->unsignedTinyInteger('is_super_admin')->default(0);
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
        Schema::dropIfExists('users');
    }
}
