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
        Schema::table('produtos', function (Blueprint $table) {
            $table->string('banda')->nullable();
            $table->date('datanota')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('notafiscal')->nullable();
            $table->string('diametro')->nullable();
            $table->string('situacao')->nullable();
            $table->text('observacao')->nullable();
            $table->string('metros')->nullable();
            $table->string('tipodecabo')->nullable();
            $table->string('voltagem')->nullable();
            $table->string('serial')->nullable();
            $table->string('macaddress')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('banda');
            $table->dropColumn('datanota');
            $table->dropColumn('marca');
            $table->dropColumn('modelo');
            $table->dropColumn('notafiscal');
            $table->dropColumn('diametro');
            $table->dropColumn('situacao');
            $table->dropColumn('observacao');
            $table->dropColumn('metros');
            $table->dropColumn('tipodecabo');
            $table->dropColumn('voltagem');
            $table->dropColumn('serial');
            $table->dropColumn('macaddress');
        });
    }
};
