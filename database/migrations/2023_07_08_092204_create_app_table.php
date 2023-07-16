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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            //$table->string('profile_picture');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('roleId')->default(1);
            $table->string('title');
            $table->string('status');
            $table->longText('description');
            $table->string('salary_range');
            $table->string('location');
            $table->string('phone');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foreign keys
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            //$table->string('profile_picture');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title');
            $table->integer('salary_range');
            $table->string('location');
            $table->string('contact');
            $table->string('skillset');
            $table->longText('about');
            $table->string('availability');
            $table->string('status');
            $table->string('phone');


            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foreign keys

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('Hiring', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('househelp_id')->nullable();
            $table->string('status');
            $table->string('document');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foreign keys
            $table->foreign('househelp_id')->references('id')->on('job_applications');
            $table->foreign('job_id')->references('id')->on('job_postings');
        });



        Schema::create('reviews', function (Blueprint $table) {


            $table->id();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name');
            $table->longText('comments');
            $table->integer('star_rating');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('job_id')->references('id')->on('job_postings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app');
    }
};
