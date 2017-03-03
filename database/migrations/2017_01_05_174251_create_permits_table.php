<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_name');
            $table->string('business_type');
            $table->text('business_address');
            $table->string('payment');
            $table->string('business_owner');
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
        Schema::dropIfExists('permits');
    }
}
