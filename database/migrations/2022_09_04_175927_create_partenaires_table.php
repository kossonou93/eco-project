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
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('photo')->nullable();
            $table->string('categorie_id')->nullable();
            $table->tinyInteger('enable')->nullable()->default(0);
            $table->string('titre_fr')->nullable();
            $table->string('soustitre_fr')->nullable();
            $table->longText('message_fr')->nullable();
            $table->string('titre_en')->nullable();
            $table->string('soustitre_en')->nullable();
            $table->longText('message_en')->nullable();
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
        Schema::dropIfExists('partenaires');
    }
};
