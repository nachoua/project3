<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name')->nullable();
            $table->binary('picture')->nullable();
            $table->string('adresse')->nullable();
            $table->string('departement')->nullable();
            $table->date('date_birthday')->nullable();
            $table->date('date_joined')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worker');
    }
}
