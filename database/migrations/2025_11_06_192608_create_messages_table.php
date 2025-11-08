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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
             $table->string('content');
            $table->boolean('is_read')->default(false);

            $table->unsignedBigInteger('sendes_profile_id');
            $table->unsignedBigInteger('receiver_profile_id');

            $table-> foreign('sendes_profile_id')
            ->references('id')
            ->on('profiles')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table-> foreign('receiver_profile_id')
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
        Schema::dropIfExists('messages');
    }
};
