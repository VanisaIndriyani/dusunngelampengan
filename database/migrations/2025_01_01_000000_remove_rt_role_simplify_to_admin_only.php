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
        Schema::table('users', function (Blueprint $table) {
            // Drop role column if it exists
            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }
            
            // Drop RT-specific columns if they exist
            if (Schema::hasColumn('users', 'rt_number')) {
                $table->dropColumn('rt_number');
            }
            
            // Keep other useful columns
            // phone, address, is_active will remain
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'rt'])->default('rt')->after('is_admin');
            $table->string('rt_number')->nullable()->after('role');
        });
    }
};
