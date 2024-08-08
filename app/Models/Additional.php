<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_additionals');
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'additional_variants');
    }
}
