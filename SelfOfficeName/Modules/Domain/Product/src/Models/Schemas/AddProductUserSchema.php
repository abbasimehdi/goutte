<?php

namespace Selfofficename\Modules\Domain\Product\Models\Schemas;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductUserSchema
{
    /**
     * @return void
     */
    public static function createTable(): void
    {
        Schema::create('product_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('product_id');
            $table->unique(['user_id', 'product_id']);
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public static function dropTable(): void
    {
        Schema::dropIfExists('product_user');
    }
}
