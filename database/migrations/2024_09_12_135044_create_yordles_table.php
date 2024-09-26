<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('yordles', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            $table->string('name');
            $table->string('description');
            $table->string('image')->nullable();
            $table->date('dateBirthday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yordles');
    }
};
