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
        Schema::create('cars', function (Blueprint $table) {

            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string("type");
            $table->string("usage");
            $table->string("registration_type");
            $table->string("registration");
            $table->string("brand");
            $table->string("energy");



            $table->string("frame");//chassis en englais
            $table->string("power");//puissance
            $table->string("places");

            $table->string("color");
            $table->integer("cylinder");
            $table->string("driving_licence");//permis
            $table->string("driving_licence_date");


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
        Schema::dropIfExists('cars');
    }
};
