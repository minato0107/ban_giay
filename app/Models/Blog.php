<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Blog belongs to Cate_blog.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cate_blog()
    {
        // belongsTo(RelatedModel, foreignKey = cate_blog_id, keyOnRelatedModel = id)
        return $this->belongsTo(Category::class, 'id_cate', 'id');
    }
    /**
     * Blog has many Blogs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = blog_id, localKey = id)
        return $this->hasMany(Blog::class, 'id_cate', 'id');
    }

}
