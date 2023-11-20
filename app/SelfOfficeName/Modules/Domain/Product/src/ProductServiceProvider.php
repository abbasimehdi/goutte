<?php

namespace Selfofficename\Modules\Domain\Product;

use App\SelfOfficeName\Modules\Domain\Product\src\Models\Schemas\Constants\ProductConstants;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->routeRegister();
        $this->loadMigrationsFrom(__DIR__.ProductConstants::MIGRATION_ROUTE);
    }

    /**
     * @return void
     */
    private function routeRegister(): void
    {
        Route::prefix(ProductConstants::PREFIX)
            ->namespace(ProductConstants::CONTROLLER_ROUTE)
            ->group(__DIR__.ProductConstants::API_ROUTE);
    }
}
