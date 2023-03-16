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
        Schema::create('agent_sell', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('agent_id');
        $table->unsignedBigInteger('sell_id')->nullable();
        $table->unsignedBigInteger('trade_id')->nullable();
        $table->timestamps();

        $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
        $table->foreign('sell_id')->references('id')->on('sells')->onDelete('cascade');
        $table->foreign('trade_id')->references('id')->on('trades')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_sell');
    }
};
