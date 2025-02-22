<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')->With('children');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
