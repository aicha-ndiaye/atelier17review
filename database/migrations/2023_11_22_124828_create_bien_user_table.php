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
    Schema::create('bien_user', function (Blueprint $table) {
        $table->primary(['bien_id', 'user_id']);
        $table->foreignId('bien_id')->constrained();
        $table->foreignId('user_id')->constrained();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bien_user');
    }
};
