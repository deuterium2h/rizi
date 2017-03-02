<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->default('default.png');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->text('address');
            $table->string('tin');
            $table->string('sss');
            $table->string('height');
            $table->string('weight');
            $table->string('bloodtype');
            $table->string('gender');
            $table->string('birthdate');
            $table->string('contact_num');
            $table->string('civil_status');
            $table->string('guardian_name');
            $table->text('guardian_address');
            $table->string('guardian_contact_num');
            $table->string('validity');
            $table->boolean('is_registered')->default(0);
            $table->boolean('is_valid')->default(0);
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
        Schema::dropIfExists('citizens');
    }
}
