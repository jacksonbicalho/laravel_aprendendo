<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'name'
    ];

    // public function children()
    // {
    //     return $this->hasMany(ProductCategory::class, 'parent', 'id');
    // }

    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }
}
