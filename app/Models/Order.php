<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order_detail;


class Order extends Model
{
    use HasFactory;
    protected $guarded =[];
    /**
     * Order belongs to .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    /**
     * Order has many Order_details.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_details()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = order_id, localKey = id)
        return $this->hasMany(Order_detail::class, 'id_order', 'id');
    }
}
