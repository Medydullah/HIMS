<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('drug_id')->nullable();
            $table->string('drug_name')->nullable();
            $table->integer('required_dose')->nullable();
             $table->integer('price')->nullable();
               $table->integer('child_dose')->nullable();
             $table->string('adult_dose')->nullable();
             $table->integer('required_child')->nullable();
             $table->integer('required_adult')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_tables');
    }
}
