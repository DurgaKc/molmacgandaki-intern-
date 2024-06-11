<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Publication extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_en',
        'photo',
        'publication_category_id',
        'publisher',
        'publisher_en',
        'date',
        'description',
        'description_en'
    ];

    public function publicationCategory():BelongsTo
  {
    return $this->belongsTo(PublicationCategory::class);
  }

  public function description():Attribute
  {
      return Attribute::make(
          get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
          set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('publication', 'public') : null
      );
  }
  public function description_en():Attribute
  {
      return Attribute::make(
          get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
          set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('publication', 'public') : null
      );
  }
  public function Photo():Attribute
  {
      return Attribute::make(
          get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
          set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('publication', 'public') : null
      );
  }

}
