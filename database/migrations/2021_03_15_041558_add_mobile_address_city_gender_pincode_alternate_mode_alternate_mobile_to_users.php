<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMobileAddressCityGenderPincodeAlternateModeAlternateMobileToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('gender')->nullable()->after('name');
            $table->bigInteger('mobile')->nullable()->after('gender');
            $table->bigInteger('alternate_mobile')->nullable()->after('mobile');
            $table->string('address')->nullable()->after('email');
            $table->string('city')->nullable()->after('address');
            $table->bigInteger('pincode')->nullable()->after('city');
            $table->string('image')->nullable()->after('pincode');
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
            $table->dropColumn('gender');
            $table->dropColumn('mobile');
            $table->dropColumn('alternate_mobile');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('pincode');
        });
    }
}
