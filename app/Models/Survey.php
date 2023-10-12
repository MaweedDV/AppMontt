<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_survey',
        'date_attention',
        'juridic_quality',
        'escale',
        'age_range',
        'genre',
        'years_antiquity',
        'place_job',
        'q8',
        'a8',
        'q9',
        'a9',
        'q10',
        'a10',
        'q11',
        'a11',
        'q12',
        'a12',
        'q13',
        'a13',
        'q14',
        'a14',
        'q15',
        'a15',
        'q16',
        'a16',
        'q17',
        'a17',
        'q18',
        'a18',
        'q19',
        'a19',
        'q20',
        'a20',
        'q21',
        'a21',
        'q22',
        'a22',
        'q23',
        'a23',
        'q24',
        'a24',
        'q25',
        'a25',
    ];
}
