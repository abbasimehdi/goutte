<?php

use Illuminate\Database\Migrations\Migration;
use Selfofficename\Modules\Domain\Product\Models\Schemas\AddProductUserSchema;

return new class extends Migration
{
    public function up()
    {
        AddProductUserSchema::createTable();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        AddProductUserSchema::dropTable();
    }
};
