<?php

namespace Selfofficename\Modules\Domain\Product\Http\Contracts\Repository;

use Selfofficename\Modules\Core\Http\Contracts\BaseRepository;
use Selfofficename\Modules\Domain\Product\Models\Product;
use Selfofficename\Modules\Domain\Product\Models\ProductUser;

class ProductUserRepository extends BaseRepository
{
    public function model(): mixed
    {
        return ProductUser::class;
    }
}
