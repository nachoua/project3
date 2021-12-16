<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociety extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('society', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')

            ->constrained('worker')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
            $table->string('name_society')->nullable();
            $table->string('adresse_society')->nullable();
            $table->date('date_buillding')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('society');
    }
}
