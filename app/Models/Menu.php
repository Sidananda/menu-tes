<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function additionals()
    {
        return $this->belongsToMany(Additional::class, 'menu_additionals'); 
    }
}
