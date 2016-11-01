<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatReportOtherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_other', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sample_id')->index();
            $table->string('name');
            $table->string('ref');
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
        Schema::dropIfExists('report_other');
    }
}
