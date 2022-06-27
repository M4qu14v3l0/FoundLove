<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id('idRegions');
            $table->string('country_id');
            $table->string('region');
            $table->integer('idCountries');
            $table->foreign('idCountries')->references('idCountries')->on('countries');
            $table->timestamps();
        });
        DB::table('regions')->insert(
            ['region' => 'costa'],
            ['region' => 'sierra'],
            ['region' => 'selva']
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
