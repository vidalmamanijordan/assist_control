<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assists', function (Blueprint $table) {
            $table->id();
            /* $table->string('name')->nullable(); */
            /* $table->string('slug'); */
            /* $table->timestamp('date')->nullable(); */
            /* $table->string('hour'); */
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('participant_id');
            $table->string('code')->nullable();
            $table->string('names')->nullable();
            $table->string('career')->nullable();
            $table->string('semester')->nullable();
            $table->string('group')->nullable();
            $table->dateTime('date')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');

            $table->unique(['user_id', 'event_id', 'participant_id']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assists');
    }
};
