<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


 class CreateAgendaTable extends Migration
{
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idpersona')->constrained('persons');
            $table->foreignId('idimagen')->constrained('pictograms');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}

