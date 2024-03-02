<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'ResearchTitle',
        'type',
        'category',
        'division',
        'author',
        'completed_year',
        'archival_date',
        'berf_type',
        'document',
    ];
}
