<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'numeric'
    ];

    public function sections()
    {
        return $this->belongsToMany(Section::class, 'group_sections', 'group_id', 'section_id');
    }

        /**
     * The group sections associated with the group.
     */
    public function groupSections()
    {
        return $this->hasMany(GroupSection::class);
    }

        /**
     * The students that belong to the group through group sections.
     */
    public function students()
    {
        return $this->hasManyThrough(Student::class, GroupSection::class, 'group_id', 'id', 'id', 'student_id');
    }
}
