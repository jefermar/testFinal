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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('type');
            $table->string('severity');
            $table->string('location');
            $table->string('description');
            $table->string('url_image');
            $table->dateTime('data');

            $table->unsignedBigInteger('profile_id');

            $table-> foreign('profile_id')
            ->references('id')
            ->on('profiles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
