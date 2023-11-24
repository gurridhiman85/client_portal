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
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('human_id')->nullable();
            $table->foreignId('department_id');
            $table->foreignId('status_id');
            $table->foreignId('priority_id');
            $table->foreignId('assignee_id');
            $table->foreignId('team_id');
            $table->foreignId('requestor_id');
            $table->foreignId('tags');
            $table->string('title');
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_tickets');
    }
};
