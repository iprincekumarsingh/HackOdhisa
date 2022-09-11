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
            $table->id('hdata');
            $table->string('g_bed');
            $table->string('icu');
            $table->string('iccu');
            $table->string('mater');
            $table->string('apos');
            $table->string('bpos');
            $table->string('anega');
            $table->string('bnega');
            $table->string('abposi');
            $table->string('abnega');
            $table->string('opos');
            $table->string('hid');
            // $table->string('contact');
            $table->string('onegative');
            // $table->string('')->nullable();
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
