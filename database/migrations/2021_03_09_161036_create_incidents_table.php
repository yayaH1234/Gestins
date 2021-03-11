<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('dates');
            $table->string('num_facture');
            $table->string('motif');
            $table->string('societe');
            $table->string('commercial');
            $table->string('livreur');
            $table->string('decision');
            $table->string('vendu_a');
            $table->string('client');
            $table->string('service_resp');
            $table->string('regelement_revente');
            $table->string('prixvente');
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
        Schema::dropIfExists('incidents');
    }
}
