<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;


class Review extends Model
{
    use HasFactory;
    /**
     * Review belongs to Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        // belongsTo(RelatedModel, foreignKey = users_id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    /**
     * Review belongs to Products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        // belongsTo(RelatedModel, foreignKey = products_id, keyOnRelatedModel = id)
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
