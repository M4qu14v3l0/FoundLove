<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_networks', function (Blueprint $table) {
            $table->id('idSocial_networks');
            $table->string('social_network_id');
            $table->string('link');
            $table->integer('idSocial_networks_list');
            $table->foreign('idSocial_networks_list')->references('idSocial_networks_list')->on('social_networks_lists');
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
        Schema::dropIfExists('social_networks');
    }
}