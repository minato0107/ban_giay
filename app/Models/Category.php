<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
   /**
     * Category belongs to .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent_name()
    {
        // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
   /**
    * Category has many Cate_pro.
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function cate_pro()
   {
       // hasMany(RelatedModel, foreignKeyOnRelatedModel = category_id, localKey = id)
       return $this->hasMany(Product::class, 'id_cate', 'id');
   }
   /**
    * Category has many Cate_blog.
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function cate_blog()
   {
       // hasMany(RelatedModel, foreignKeyOnRelatedModel = category_id, localKey = id)
       return $this->hasMany(Blog::class, 'id_cate', 'id');
   }
}
