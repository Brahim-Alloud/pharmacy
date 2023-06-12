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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('email');
            $table->string('telephone');
            $table->string('photo_chemain')->nullable();
            $table->string('ville');
            $table->string('heure_matin_ts_debut');
            $table->string('heure_matin_ts_fin');
            $table->string('heure_soir_ts_debut');
            $table->string('heure_soir_ts_fin');
            $table->string('heure_soir_fs_debut');
            $table->string('heure_soir_fs_fin');
            $table->string('semaine_travail_fs');
            $table->decimal('geo_lat')->nullable();
            $table->decimal('geo_long')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
