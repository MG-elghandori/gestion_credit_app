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
        Schema::create('deleteclients', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("telephone");
            $table->string("nomProduit");
            $table->integer("quantite")->default(1);
            $table->float("prix");
            $table->float("prixAvance");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deleteclients');
    }
};
