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
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('gender');
            $table->string('civil');
            $table->string('age');
            $table->string('birthdate');
            $table->string('votersno');
            $table->string('yearsres');
            $table->string('street');
            $table->string('barangay');
            $table->string('cityprovince');
            $table->string('province');
            $table->string('zipcode');
            $table->string('sitio');
            $table->string('mlast');
            $table->string('mfirst');
            $table->string('mmiddle');
            $table->string('flast');
            $table->string('ffirst');
            $table->string('fmiddle');
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
