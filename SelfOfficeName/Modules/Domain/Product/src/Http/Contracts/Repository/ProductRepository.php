<?php

namespace Selfofficename\Modules\Domain\Product\Http\Contracts\Repository;

use Selfofficename\Modules\Core\Http\Contracts\BaseRepository;
use Selfofficename\Modules\Core\Http\Resources\BaseListCollection;
use Selfofficename\Modules\Domain\Product\Models\Product;
use Goutte;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

/*
 * @TODO
 * Create by Builder pattern
 */
class ProductRepository extends BaseRepository
{
    public function model(): mixed
    {
        return Product::class;
    }

    public function index()
    {
        $crawlerProduct = Goutte::request('GET', 'https://uk.puma.com/uk/en/pd/velophasis-technisch-sneakers/390932?swatch=03&referrer-category=collections-select-velophasis');

        $key = 0;
        $products[$key]['header']            = $crawlerProduct->filter('h1')->text();
        $products[$key]['price']             = $crawlerProduct->filter('.tw-qlq5hv .whitespace-nowrap')->text();
        $products[$key]['original-site-url'] = "https://uk.puma.com/uk/en/pd/velophasis-technisch-sneakers/390932?swatch=03&referrer-category=collections-select-velophasis";

        $productImages = [];
        $crawlerProduct->filter('.relative img')->each(function ($node) use(&$productImages) {
            $productImages[UniqId()] = $node->eq(0)->attr('src');
        });

        $products[$key]['$productImages'] = $productImages;

        return (new BaseListCollection($products))
            ->response()
            ->setStatusCode(ResponseAlias::HTTP_OK);
    }
}
