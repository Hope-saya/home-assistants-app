<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phoneNumber')->nullable();
            $table->string('physical_location')->nullable();
            $table->string('bio')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('roleId');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //Foreign Key
            $table->foreign('roleId')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
