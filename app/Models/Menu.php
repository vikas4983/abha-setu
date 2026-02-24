<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    const HEADER = 1;
    const FOOTER = 2;
    protected $fillable = ['name', 'parent_id', 'url', 'menu_type', 'status'];

    public function name(): Attribute
    {
        return Attribute::make(
            set: fn($value) => ucfirst($value)
        );
    }

    public function scopeHeader($query)
    {
        return $query->where('menu_type', 1);
    }
    public function scopeFooter($query)
    {
        return $query->where('menu_type', 2);
    }
    public function scopeAllMenu($query)
    {
        return $query->where('status',1)->orderByDesc('status');
    }

    public function children(){
        return $this->hasMany(Menu::class,'parent_id')->with('children');
    }
}
