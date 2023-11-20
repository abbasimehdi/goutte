<?php

use App\SelfOfficeName\Modules\Domain\Product\src\Models\Schemas\AddProductSchema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        AddProductSchema::createTable();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        AddProductSchema::dropTable();
    }
};
