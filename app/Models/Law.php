<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Law extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_en',
        'photo',
        'law_category_id',
        'publisher',
        'publisher_en',
        'date',
        'description',
        'description_en'
    ];


    public function lawCategory():BelongsTo
    {
      return $this->belongsTo(LawCategory::class);
    }
    public function Photo():Attribute
  {
      return Attribute::make(
          get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
          set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('law', 'public') : null
      );
  }

  public function description():Attribute
  {
      return Attribute::make(
          get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
          set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('law', 'public') : null
      );
  }
  public function description_en():Attribute
  {
      return Attribute::make(
          get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
          set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('law', 'public') : null
      );
  }

}
