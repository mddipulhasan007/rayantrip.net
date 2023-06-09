<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormDataTable extends Migration
{
    public function up()
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('from_city');
            $table->string('from_city_short_apt_name');
            $table->string('to_city');
            $table->string('to_city_short_apt_name');
            $table->string('dept_date_from');
            $table->string('trav_count');
            $table->string('fare_type');
            $table->string('package');
            $table->string('total_price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_data');
    }
}
