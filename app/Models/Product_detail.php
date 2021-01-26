<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\User;

class Product_detail extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected function getList ($id)
    {
        $list =  Product_detail::where('id_product',$id)->get();
        foreach($list as $key=>$data){
          $attr = json_decode($data->id_attr);
          unset($data->id_attr);
          $data->size =  Attribute::where('id',$attr->size)->select('value')->first();
          $data->color=  Attribute::whereIn('id',$attr->color)->select('value')->get();
          $list[$key] = $data;
        }
        return $list;
    }
    /**
     * Product_detail has many Products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = product_detail_id, localKey = id)
        return $this->hasMany(Product_details::class, 'id_product', 'id');
    }

    /**
     * Product_detail belongs to Product_details.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product_details()
    {
        // belongsTo(RelatedModel, foreignKey = product_details_id, keyOnRelatedModel = id)
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

}
