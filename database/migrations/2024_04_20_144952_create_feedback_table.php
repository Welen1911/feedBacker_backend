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
        Schema::create('feedback', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->foreignUuid('api_key_id')->constrained('api_keys')
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('fingerprint');
            $table->text('text');
            $table->enum('type', ['OTHER', 'ISSUE', 'IDEA']);
            $table->string('device');
            $table->string('page');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
