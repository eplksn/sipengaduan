<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('complaint_evidences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('complaint_id');
            $table->string('title');
            $table->string('file_path');
            $table->string('file_type')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('complaint_evidences');
    }
};
