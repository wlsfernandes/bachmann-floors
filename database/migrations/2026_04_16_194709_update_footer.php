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
        Schema::table('footer', function (Blueprint $table) {
            $table->text('title_en')->change();
            $table->text('title_es')->change();
            $table->text('subtitle_en')->change();
            $table->text('subtitle_es')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('footer', function (Blueprint $table) {
            $table->string('title_en', 255)->change();
            $table->string('title_es', 255)->change();
            $table->string('subtitle_en')->change();
            $table->string('subtitle_es')->change();
        });
    }
};
