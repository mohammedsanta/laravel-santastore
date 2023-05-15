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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerName');
            $table->unsignedBigInteger('CustomerNumber');
            $table->string('CustomerAccount');
            $table->string('CustomerReferer');
            $table->tinyInteger('CustomerAge');
            $table->string('CustomerAddress');
            $table->string('CustomerIs');
            $table->string('CustomerAbout');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
