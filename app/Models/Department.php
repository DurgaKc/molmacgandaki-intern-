<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class Department extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'title_en'
    ];

    public function employees():HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
