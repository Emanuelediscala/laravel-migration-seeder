<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("azienda");
            $table->string("Stazione_di_partenza");
            $table->string("Stazione_di_arrivo");
            $table->time("Orario_di_partenza");  
            $table->time("Orario di arrivo");
            $table->string("Codice treno");
            $table->integer("Numero Carrozze");            
            $table->boolean("In_orario");
            $table->boolean("cancellato");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
