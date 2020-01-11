<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserProfileToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('dob')->after('name')->nullable();
            $table->enum('gender', ['Male', 'Female'])->after('dob')->nullable();
            $table->string('country_code')->after('gender')->nullable();
            $table->bigInteger('phone')->after('country_code')->nullable();
            $table->text('intro')->after('email_verified_at')->nullable();
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
            $table->dropColumn('dob');
            $table->dropColumn('gender');
            $table->dropColumn('country_code');
            $table->dropColumn('phone');
            $table->dropColumn('intro');
        });
    }
}
