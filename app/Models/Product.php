<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product_detail;


class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Product belongs to .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cate()
    {
        // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
        return $this->belongsTo(Category::class, 'id_cate', 'id');
    }

    /**
     * Product has many .
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_details()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = product_id, localKey = id)
        return $this->hasMany(Product_detail::class, 'id_product', 'id');
    }

}
