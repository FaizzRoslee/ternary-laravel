<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('full_name');
            $table->string('ic_number')->nullable();
            $table->string('title')->nullable();
            $table->string('department')->nullable();
            $table->string('term')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('avatar')->default('media/users/default.jpg');
            $table->date('doj')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(Hash::make('tssb12#$'));
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
