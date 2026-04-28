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
        Schema::create('fuel_logs', function (Blueprint $table){

            $table->id();

            $table->foreignId('user_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->date('data_abastecimento');

            $table->string('combustivel_tipo');

            $table->decimal('quantidade_litros',8,2);

            $table->decimal('valor_por_litro',8,2);

            $table->decimal('valor_total',10,2);

            $table->integer('km_odometro')->nullable();

            $table->string('posto')->nullable();

            $table->boolean('tanque_cheio')
            ->default(false);

            $table->text('observacoes')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_logs');
    }
};
