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
        Schema::table('leads', function (Blueprint $table) {
            $table->string('page_url')->nullable()->after('source');
            $table->string('ip_address', 45)->nullable()->after('page_url');
            $table->string('user_agent')->nullable()->after('ip_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropColumn(['page_url', 'ip_address', 'user_agent']);
        });
    }
};
