<?php

namespace Selfofficename\Modules\Domain\Product\Services;

use Illuminate\Http\JsonResponse;
use Selfofficename\Modules\Domain\Product\Http\Contracts\Repository\ProductInterface;
use Selfofficename\Modules\Domain\Product\Http\Contracts\Repository\ProductRepository;
use Selfofficename\Modules\Domain\Product\Jobs\ProductLiked;
use Selfofficename\Modules\Domain\Product\Models\Schemas\Constants\ProductConstants;
use Selfofficename\Modules\Domain\Product\Traits\UploadFile;

class ProductService implements ProductInterface
{
    use UploadFile;

    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(protected ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return  $this->productRepository->index();
    }
}
