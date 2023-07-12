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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title');
            $table->string('status');
            $table->longText('description');
            $table->string('salary_range');
            $table->string('location');
            $table->string('contact');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foreign keys
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id')->default(1);
            $table->unsignedBigInteger('user_id')->default(1);
            $table->string('title');
            $table->integer('salary_range');
            $table->string('location');
            $table->string('contact');
            $table->string('skillset');
            $table->longText('about');
            $table->string('availability');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foreign keys
            $table->foreign('job_id')->references('id')->on('job_postings');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('reviews', function (Blueprint $table) {


            $table->id();
            $table->unsignedBigInteger('job_id')->default(1);
            $table->unsignedBigInteger('user_id')->default(1);
            $table->string('name');
            $table->longText('comments');
            $table->integer('star_rating');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('job_postings')->onDelete('cascade');
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
