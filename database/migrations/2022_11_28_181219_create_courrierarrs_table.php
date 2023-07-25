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
        Schema::create('courrierarrs', function (Blueprint $table) {
            $table->id();
            $table->string('numCr')->unique()->nullable();
            $table->date('dateArrive');
            $table->string('expediteur');
            $table->string('objet');
            $table->string('observation');
            $table->string('direction');
            $table->foreign('direction')->references('codebr')->on('branches');
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
        Schema::dropIfExists('courrierarrs');
    }
};
