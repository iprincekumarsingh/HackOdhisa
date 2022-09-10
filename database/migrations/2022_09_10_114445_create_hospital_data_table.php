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
        Schema::create('hospital_data', function (Blueprint $table) {
            $table->id('hid');
            $table->string('PHC')->nullable();
            $table->string('CHC')->nullable();
            $table->string('SS')->nullable();
            $table->string('MS')->nullable();
            $table->string('')->nullable();
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
        Schema::dropIfExists('hospital_data');
    }
};
