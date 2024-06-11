<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_en',
        'department_id',
        'designation_id',
        'position',
        'email',
        'phone',
        'photo'
    ];
    public function Photo():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('employee', 'public') : null
        );
    }

  public function department():BelongsTo
  {
    return $this->belongsTo(Department::class);
  }
  public function designation():BelongsTo{
    return $this->belongsTo(Designation::class);
  }

  public function settings():HasMany
  {
    return $this->hasMany(Setting::class);
  }
}
