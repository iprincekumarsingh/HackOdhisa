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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id('hid');
            $table->string('hospital_name');
            $table->string('username');
            $table->string('password');
            $table->string('regno');
            $table->string('address');
            $table->string('pincode');
            $table->string('contact');
            $table->string('alter_no');
            // $table->enum('hospital_type',['PHC', 'CHC', 'SS', 'MS']);
            $table->enum('ownership', ['govt', 'pvt', 'trust']);
            $table->string('verified')->default(0);
            // // $table->string('bed_avail')->default(0); //0 = null , 1= available;
            // $table->enum('bed_type',['general','maternity','ICU','ICCU',"HCU"]);
            // $table->string('blood')
            $table->string('code')->default(0);
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
        Schema::dropIfExists('hospitals');
    }
};
