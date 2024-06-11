<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PublicationCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_en'
    ];


    public function publications():HasMany
    {
        return $this->hasMany(Publication::class);
    }


}
