<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'progress',
        'short_description',
        'problem_analysis',
        'solution',
        'features',
        'implementation_result',
        'tech_stack',
        'diagram',
        'pdf_report',
    ];
}