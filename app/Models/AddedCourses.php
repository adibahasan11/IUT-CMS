<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddedCourses extends Model
{
    use HasFactory;

    protected $fillable = [
        'CourseCode',
        'CourseTitle',
        'Dept',
        'Sem',
        'CourseType',
        'Comp_Mand',
        'Credit',
        'ContactHour',
        'E_ContactHour',
    ];
}
