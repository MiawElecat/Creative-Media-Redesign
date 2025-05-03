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
        if (Schema::hasTable('artikels')) {
            Schema::table('artikels', function (Blueprint $table) {
                $table->string('judul')->after('id');
                $table->string('slug')->unique()->after('judul');
                $table->text('excerpt')->nullable()->after('slug');
                $table->longText('konten_lengkap')->after('excerpt');
                $table->string('thumbnail')->nullable()->after('konten_lengkap');
                $table->boolean('is_published')->default(false)->after('thumbnail');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('artikels')) {
            Schema::table('artikels', function (Blueprint $table) {
                $table->dropColumn(['judul', 'slug', 'excerpt', 'konten_lengkap', 'thumbnail', 'is_published']);
            });
        }
    }
};
