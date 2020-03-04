<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDierSoortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dier_soort', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam')->unique();
            $table->timestamps();
        });

        Schema::table('dier', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->unsignedBigInteger('soort_id');
            $table->foreign('soort_id')->references('id')->on('dier_soort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dier_soort');
    }
}
