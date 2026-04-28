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
        Schema::create('daily_summaries', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->date('data');

            $table->decimal('receitas_total',10,2)
                ->default(0);

            $table->decimal('despesas_total',10,2)
                ->default(0);

            $table->decimal('lucro_liquido',10,2)
                ->default(0);

            $table->decimal('km_rodados',8,2)
                ->nullable();

            $table->integer('horas_online')
                ->nullable();

            $table->text('observacoes')
                ->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_summaries');
    }
};
