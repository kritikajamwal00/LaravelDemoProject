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
        Schema::disableForeignKeyConstraints();
        Schema::table('blogs', function (Blueprint $table) {
           // Add the user_id column as a foreign key referencing the id column in the users table
           $table->unsignedBigInteger('user_id');
           $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
             // Drop the foreign key and the user_id column if you want to rollback the migration
             $table->dropForeign(['user_id']);
             $table->dropColumn('user_id');
        });
        Schema::enableForeignKeyConstraints();
    }
};

