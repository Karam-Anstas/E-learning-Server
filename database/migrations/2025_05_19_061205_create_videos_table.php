<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Section;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("video_url");
            $table->string('duration')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->boolean('is_preview')->default(false);
            $table->integer('order')->default(0);
            $table->foreignIdFor(Section::class)->constrained()->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
