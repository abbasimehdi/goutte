<?php

namespace Selfofficename\Modules\Core\Http\Services;

use Illuminate\Http\JsonResponse;
use Selfofficename\Modules\Core\Http\Resources\BaseListCollection;
use Selfofficename\Modules\Domain\Product\Http\Contracts\Repository\ProductInterface;
use Selfofficename\Modules\Domain\Product\Http\Contracts\Repository\ProductRepository;
use Selfofficename\Modules\Domain\Product\Models\Product;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class ProductService implements ProductInterface
{

    public function __construct(protected ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        return  $this->productRepository->all();
    }

    public function store(array $data): JsonResponse
    {
        return $this->productRepository->create($data);
    }
}
