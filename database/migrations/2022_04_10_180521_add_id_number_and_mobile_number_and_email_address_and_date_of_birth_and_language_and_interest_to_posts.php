<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->string('idNumber');
            $table->string('mobileNumber');
            $table->string('emailAddress');
            $table->date('dateOfBirth');
            $table->string('language');
            $table->text('interest');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropColumn('Name');
            $table->dropColumn('Surname');
            $table->dropColumn('idNumber');
            $table->dropColumn('mobileNumber');
            $table->dropColumn('emailAddress');
            $table->dropColumn('dateOfBirth');
            $table->dropColumn('language');
            $table->dropColumn('interest');
        });
    }
};
