<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'roll_no',
        'email',
        'gender',
        'dob'
    ];

    public function groupSections()
    {
        return $this->belongsToMany(GroupSection::class, 'student_group_section', 'student_id', 'group_section_id')
                    ->withTimestamps();
    }
}
