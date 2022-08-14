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
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->string('titre_fr')->nullable();
            $table->longText('soustitre_fr')->nullable();
            $table->longText('texte_fr')->nullable();
            $table->string('titre_en')->nullable();
            $table->longText('soustitre_en')->nullable();
            $table->longText('texte_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeries');
    }
};
