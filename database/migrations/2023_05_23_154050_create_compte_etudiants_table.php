<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_etudiants', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('type_facture');

            $table->bigInteger('id_etudiant')->unsigned();
            $table->bigInteger('facture_id')->nullable()->unsigned();
            $table->bigInteger('id_recuEtudaint')->nullable()->unsigned();
            $table->bigInteger('id_fraistraitements')->nullable()->unsigned();
            $table->bigInteger('id_recuechanges')->nullable()->unsigned();
            $table->foreign('id_recuechanges')->references('id')->on('recu_de_echanges')->onDelete('cascade');
            $table->foreign('id_fraistraitements')->references('id')->on('frais_traitements')->onDelete('cascade');
            $table->foreign('id_recuEtudaint')->references('id')->on('recu_etudiants')->onDelete('cascade');
            $table->foreign('facture_id')->references('id')->on('factures')->onDelete('cascade');
            $table->foreign('id_etudiant')->references('id')->on('etudiants')->onDelete('cascade');
        
            $table->decimal('Debit',8,2)->nullable();
            $table->decimal('credit',8,2)->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('compte_etudiants');
    }
}
