<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatReportGenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_genus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sample_id')->index();
            $table->tinyInteger('bacteria_id');
            $table->string('value');
            $table->tinyInteger('image');
            $table->text('note');
            $table->tinyInteger('color');
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
        Schema::dropIfExists('report_genus');
    }
}
