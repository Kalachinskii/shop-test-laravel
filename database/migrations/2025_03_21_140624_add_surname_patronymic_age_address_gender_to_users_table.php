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
            $table->string(column: 'surname')->nullable();
            $table->string(column: 'patronymic')->nullable();
            $table->integer(column: 'age')->nullable();
            $table->string(column: 'addres')->nullable();
            $table->string(column: 'gender')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('patronymic');
            $table->dropColumn('age');
            $table->dropColumn('addres');
            $table->dropColumn('gender');
        });
    }
};
