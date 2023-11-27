<?php

namespace Selfofficename\Modules\Domain\Product\Http\Controllers;

use Illuminate\Http\Request;
use Selfofficename\Modules\Domain\Product\Models\Product;
use Selfofficename\Modules\InfraStructure\Http\Controllers\Controller;

class ProdcutController extends Controller
{
    public function store(Request $request)
    {

        return Product::query()->create([
            'title' => $request->post('title'),
            'image' => $this->getFileUrl($request->post('image'))
        ]);
    }

    private function getFileUrl(array|string|null $image)
    {
        return $image;
    }
}
