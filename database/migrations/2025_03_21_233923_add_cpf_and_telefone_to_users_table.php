<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('cpf', 14)->unique()->nullable(); // CPF com máscara (ex: 123.456.789-00)
        $table->string('telefone', 15)->nullable(); // Telefone com máscara (ex: (11) 99999-9999)
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['cpf', 'telefone']);
    });
}
};
