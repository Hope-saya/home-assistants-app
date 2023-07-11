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
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('status');
            $table->string('description');
            $table->string('salary_range');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foreign keys
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('user_id');
            $table->string('endDate');
            $table->string('documents');
            $table->text('description');
            $table->timestamps();

            //Foreign keys
            $table->foreign('job_id')->references('id')->on('job_postings');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('message');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
