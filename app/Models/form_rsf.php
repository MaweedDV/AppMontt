<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_rsf extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_attention',
        'hour_attention',
        'email',
        'phone',
        'address',
        'place_job',
        'type_procedure',
        'area_attention',
        'subject',
        'observation'
    ];

}
