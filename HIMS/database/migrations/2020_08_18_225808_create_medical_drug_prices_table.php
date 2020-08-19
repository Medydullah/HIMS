<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalDrugPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_drug_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_id')->nullable();
            $table->string('Service_name')->nullable();
            $table->integer('price')->nullable();
             $table->string('category')->nullable();
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
        Schema::dropIfExists('medical_drug_prices');
    }
}
