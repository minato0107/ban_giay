<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_detail;


class Wishlist extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Wishlist belongs to Wishlists.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wishlists()
    {
        // belongsTo(RelatedModel, foreignKey = wishlists_id, keyOnRelatedModel = id)
        return $this->belongsTo(Product_detail::class, 'id_pro_detail', 'id');
    }
}
