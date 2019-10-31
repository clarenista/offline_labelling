<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facility_cd', 6);
            $table->string('facility_name', 255);
            $table->string('blood_type', 6);
            $table->date('collection_dt');
            $table->date('expiration_dt');
            $table->char('component_cd', 2);
            $table->string('component_name', 255);
            $table->char('volume', 3);
            $table->boolean('NAT')->default(0);
            $table->boolean('ANTIBODY')->default(0);
            $table->boolean('ZIKA')->default(0);
            $table->string('header', 255);
            $table->string('footer', 255);
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
        Schema::dropIfExists('labels');
    }
}
