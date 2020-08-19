<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('drug_id')->nullable();
            $table->string('drug_name')->nullable();
            $table->integer('quantity')->nullable();
             $table->string('category')->nullable();
             $table->date('date')->nullable();
             $table->integer('email')->nullable();
             $table->string('staff_id')->nullable();

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
        Schema::dropIfExists('request_drugs');
    }
}
