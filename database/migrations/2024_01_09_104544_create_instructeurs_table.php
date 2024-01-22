<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructeursTable extends Migration
{
    public function up()
{
    Schema::create('instructeurs', function (Blueprint $table) {
        $table->id();
        $table->string('voornaam');
        $table->string('tussenvoegsel')->nullable();
        $table->string('achternaam');
        $table->string('mobiel');
        $table->date('datum_in_dienst');
        $table->integer('aantal_sterren');
        $table->string('voertuig')->nullable();
        $table->boolean('is_actief')->default(true);
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('instructeurs');
    }
}
