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
        Schema::create('vtn_pages', function (Blueprint $table) {
            $table->id();
            $table->string("page_title");
            $table->string("page_content");
            $table->string("page_status");
            $table->softDeletes(precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtn_pages');
    }
};
