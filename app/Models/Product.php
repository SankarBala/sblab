<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory;

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function related()
    {
        return Product::where('id', '!=', $this->id) // Exclude current product
            ->whereHas('tags', function ($query) {
                $query->whereIn('tags.id', $this->tags->pluck('id'));
            })
            ->withCount(['tags as tag_match_count' => function ($query) {
                $query->whereIn('tags.id', $this->tags->pluck('id'));
            }])
            ->orderByDesc('tag_match_count') // Sort by most matched tags
            ->limit(4) // Keep only 4
            ->get();
    }
}
