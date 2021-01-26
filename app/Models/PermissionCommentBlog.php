<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PermissionCommentBlog extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * PermissionCommentBlog belongs to Comment_user_id.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment_user_id()
    {
        // belongsTo(RelatedModel, foreignKey = comment_user_id_id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class,'id_user','id');
    }
}
