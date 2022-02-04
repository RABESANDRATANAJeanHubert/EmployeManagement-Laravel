<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cvc');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('sex');
            $table->string('date_naissance');
            $table->string('cartNumber');
            $table->string('month');
            $table->string('year');
            $table->string('default');
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
        Schema::dropIfExists('customers');
    }
}
