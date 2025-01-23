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
        Schema::create('seedlings', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type");
            $table->unsignedTinyInteger("old");
            $table->unsignedTinyInteger("cotyledonNumber");
            $table->boolean("growing")->default(false);
            $table->float("height");
            $table->unsignedTinyInteger("wateringRequirement");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seedlings');
    }
};
