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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('role')->nullable()->after('features');
            $table->string('project_type')->nullable()->after('role');
            $table->string('year')->nullable()->after('project_type');
            $table->string('team')->nullable()->after('year');
            $table->string('timeline')->nullable()->after('team');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['role', 'project_type', 'year', 'team', 'timeline']);
        });
    }
};
