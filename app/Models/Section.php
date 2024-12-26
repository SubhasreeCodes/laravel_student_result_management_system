<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_section', 'section_id', 'group_id');
    }
}
