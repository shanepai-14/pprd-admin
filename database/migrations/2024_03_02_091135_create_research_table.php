<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('research', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('ResearchTitle');
            $table->string('type');
            $table->string('category');
            $table->string('division');
            $table->string('author');
            $table->year('completed_year')->nullable();
            $table->date('archival_date')->nullable();
            $table->string('berf_type')->nullable();
            $table->string('document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research');
    }
};
