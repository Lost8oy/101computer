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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id');
            $table->foreignId('manufacturer_id');
            $table->foreignId('relations_id');
            $table->string('inventory_number');
            $table->string('serial_number');
            $table->string('model');
            $table->string('submodel');
            $table->string('processor');
            $table->string('power');
            $table->string('speed');
            $table->date('year');
            $table->string('bit');
            $table->longtext('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
