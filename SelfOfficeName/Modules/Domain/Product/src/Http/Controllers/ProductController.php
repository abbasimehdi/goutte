<?php

namespace Selfofficename\Modules\Domain\Product\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Selfofficename\Modules\Domain\Product\Http\Contracts\Repository\ProductInterface;
use Selfofficename\Modules\InfraStructure\Http\Controllers\Controller;
class ProductController extends Controller
{

    /**
     * @param ProductInterface $productRepositoryInterface
     */
    public function __construct(protected ProductInterface $productRepositoryInterface)
    {
        $this->productRepositoryInterface = $productRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return $this->productRepositoryInterface->index();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Foundation\Bus\PendingDispatch
     */
    public function like(Request $request)
    {
        return $this->productRepositoryInterface->like($request->post());
    }
}
