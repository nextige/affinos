<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLnameAndPhoneAndCagecodeAndSamsAndCityAndZipAndStateAndCountryAndAddressToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lname');
            $table->string('phone');
            $table->string('cagecode');
            $table->string('sams');
            $table->string('city');
            $table->string('zip');
            $table->string('state');
            $table->string('country');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['lname']);
            $table->dropColumn(['phone']);
            $table->dropColumn(['cagecode']);
            $table->dropColumn(['sams']);
            $table->dropColumn(['city']);
            $table->dropColumn(['zip']);
            $table->dropColumn(['state']);
            $table->dropColumn(['country']);
            $table->dropColumn(['address']);
        });
    }
}
