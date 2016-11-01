<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected $guarded = [];

    protected $fillable = ['sample_id','gut','metabolism','disease','papa','papa_disease','papa_disease_color','food','functional_food','life','common_bacteria_s','common_bacteria_s_color','common_bacteria','harm_bacteria_s','harm_bacteria_s_color','harm_bacteria','carbohydrate_s','carbohydrate_s_color','carbohydrate','lipid_s','lipid_s_color','lipid','protein_s','protein_s_color','protein','immune_s','immune_s_color','immune','benefit_s','benefit_s_color','benefit','harm_s','harm_s_color','harm','diabetes2_s','diabetes2_s_color','diabetes2','ibd_s','ibd_s_color','ibd','coloncancer_s','coloncancer_s_color','coloncancer'];
}
