<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;
    Protected $fillable=[
          'office_name',
          'office_name_en',
          'address',
          'address_en',
          'email',
          'phone',
          'logo',
          'flag',
          'background_img',
          'information_officer_id',
          'office_head_id',
          'spoke_person_id',
          'map_iframe',
          'facebook_iframe',
          'twitter_iframe'


    ];

    public function logo():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('setting', 'public') : null
        );
    }
    public function flag():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('setting', 'public') : null
        );
    }
    public function background():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('setting', 'public') : null
        );
    }
public function informationOfficer():BelongsTo
{
    return $this->belongsTo(Employee::class, "information_officer_id");
}
  public function officeHead():BelongsTo
  {
    return $this->belongsTo(Employee::class, "office_head_id");
  }
  public function spokePerson():BelongsTo
  {
    return $this->belongsTo(Employee::class, "spoke_person_id");
  }

}
