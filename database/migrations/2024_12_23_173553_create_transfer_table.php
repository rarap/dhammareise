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
        Schema::create('transfer', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('event_id');
            $table->string('centre_fk');
            $table->string('start');
            $table->string('via')->nullable();
            $table->string('destination');
            $table->string('email');
            $table->string('name');
            $table->text('message');
            $table->enum('mode', [
                'request',
                'offer'
            ]);
            $table->foreign('event_id')->references('id')->on('event');
            $table->foreign('centre_fk')->references('identifier')->on('centre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer');
    }
};
