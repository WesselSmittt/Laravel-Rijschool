<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigsTable extends Migration
{
    public function up()
    {
        Schema::create('voertuigs', function (Blueprint $table) {
            $table->id();
            $table->string('kenteken');
            $table->string('type');
            $table->date('bouwjaar');
            $table->string('brandstof');
            $table->foreignId('type_voertuig_id')->constrained('type_voertuigs');
            $table->timestamps();
        });

        // Inserting sample data
        // ... (as provided in the previous message)
    }

    public function down()
    {
        Schema::dropIfExists('voertuigs');
    }
}
