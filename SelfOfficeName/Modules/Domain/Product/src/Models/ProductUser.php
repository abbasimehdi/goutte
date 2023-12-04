<?php

namespace Selfofficename\Modules\Domain\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    protected $table = 'product_user';
    protected $fillable = ['user_id', 'product_id'];
    use HasFactory;
}
