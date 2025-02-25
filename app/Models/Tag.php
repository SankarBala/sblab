<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // Automatically generate slug before saving
    public static function boot()
    {
        parent::boot();

        static::creating(function ($tag) {
            $tag->slug = static::generateUniqueSlug($tag->name);
        });

        static::updating(function ($tag) {
            if ($tag->isDirty('name')) { // Only regenerate slug if name has changed
                $tag->slug = static::generateUniqueSlug($tag->name, $tag->id);
            }
        });
    }

    private static function generateUniqueSlug($name, $tagId = null)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $counter = 1;

        while (
            static::where('slug', $slug)
            ->where('id', '!=', $tagId) // Ignore the current tag when updating
            ->exists()
        ) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        return $slug;
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
