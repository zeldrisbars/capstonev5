<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resident extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('gender')->nullable();
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
