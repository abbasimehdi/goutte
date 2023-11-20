<?php

namespace App\SelfOfficeName\Modules\Domain\Product\src\Models\Schemas;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductSchema
{
    /**
     * @return void
     */
    public static function createTable(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public static function dropTable(): void
    {
        Schema::dropIfExists('products');
    }
}
