<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sample_id')->index();
            $table->json('gut');
            $table->json('metabolism');
            $table->json('disease');
            $table->json('papa');
            $table->json('papa_disease');
            $table->tinyInteger('papa_disease_color');
            $table->json('food');
            $table->json('functional_food');
            $table->json('life');
            $table->text('common_bacteria_s');
            $table->tinyInteger('common_bacteria_s_color');
            $table->json('common_bacteria');
            $table->text('harm_bacteria_s');
            $table->tinyInteger('harm_bacteria_s_color');
            $table->json('harm_bacteria');
            $table->text('carbohydrate_s');
            $table->tinyInteger('carbohydrate_s_color');
            $table->json('carbohydrate');
            $table->text('lipid_s');
            $table->tinyInteger('lipid_s_color');
            $table->json('lipid');
            $table->text('protein_s');
            $table->tinyInteger('protein_s_color');
            $table->json('protein');
            $table->text('immune_s');
            $table->tinyInteger('immune_s_color');
            $table->json('immune');
            $table->text('benefit_s');
            $table->tinyInteger('benefit_s_color');
            $table->json('benefit');
            $table->text('harm_s');
            $table->tinyInteger('harm_s_color');
            $table->json('harm');
            $table->text('diabetes2_s');
            $table->tinyInteger('diabetes2_s_color');
            $table->json('diabetes2');
            $table->text('ibd_s');
            $table->tinyInteger('ibd_s_color');
            $table->json('ibd');
            $table->text('coloncancer_s');
            $table->tinyInteger('coloncancer_s_color');
            $table->json('coloncancer');
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
        Schema::dropIfExists('reports');
    }
}
