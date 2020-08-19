<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('drug_id');
            $table->string('drug_name')->nullable();
            $table->integer('price')->nullable();
             $table->date('expire_date')->nullable();
            $table->integer('box_no')->nullable();
            $table->integer('packet_no')->nullable(); //date
            $table->integer('tablets_no')->nullable();  //date
            $table->string('employment_id')->nullable();
            $table->string('employment_name')->nullable();
            $table->timestamps();
            $table->integer('total_drug')->nullable();  //date
            $table->integer('stock_no')->nullable();
            $table->date('stock_date')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drugs');
    }
}
