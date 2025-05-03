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
        Schema::table('karya_siswas', function (Blueprint $table) {
            if (Schema::hasColumn('karya_siswas', 'urutan')) {
                $table->dropColumn('urutan');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('karya_siswas', function (Blueprint $table) {
            if (!Schema::hasColumn('karya_siswas', 'urutan')) {
                $table->integer('urutan')->default(0)->after('is_published');
            }
        });
    }
};
