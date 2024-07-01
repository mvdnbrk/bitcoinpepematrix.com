<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rune_prices', function (Blueprint $table) {
            $table->id();
            $table->string('ticker');
            $table->double('price_in_sats')->unsigned();
            $table->timestamp('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rune_prices');
    }
};
