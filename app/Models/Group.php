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
        return $this->belongsToMany(Section::class, 'group_section', 'group_id', 'section_id');
    }
}
