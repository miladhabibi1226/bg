<?php

namespace Webkul\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webkul\Attribute\Contracts\Attribute;
use Webkul\Attribute\Contracts\AttributeOption;


class ProductVariant extends Model
{
    use HasFactory;
    protected $table = 'product_variants';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'product_id',
        'attribute_id',
        'attribute_option_id',
        'price',
        'stock'
    ];


    // Define relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function attributeOption()
    {
        return $this->belongsTo(AttributeOption::class);
    }
}
