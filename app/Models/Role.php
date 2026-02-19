<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Role extends Model
{
    protected $fillable = ['name', 'guard_name', 'status'];
    protected $casts = ['created_at' => 'datetime:d M Y'];

    public function scopeActive($query)
    {
        return $query;
    }
    protected function name(): Attribute
    {
        return Attribute::make(set: fn($value) => strtolower($value));
    }
}
