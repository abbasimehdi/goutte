<?php

use Illuminate\Support\Facades\Route;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//
//    return view('welcome')->with(['products' => \Selfofficename\Modules\Domain\Product\Models\Product::paginate(5)]);
//});

Route::get('/', function() {
    $crawlerProduct = Goutte::request('GET', 'https://uk.puma.com/uk/en/pd/velophasis-technisch-sneakers/390932?swatch=03&referrer-category=collections-select-velophasis');

    $key = 0;
    $products[$key]['header'] = $crawlerProduct->filter('h1')->text();
    $products[$key]['price'] = $crawlerProduct->filter('.tw-qlq5hv .whitespace-nowrap')->text();
    $products[$key]['original-site-url'] = "https://uk.puma.com/uk/en/pd/velophasis-technisch-sneakers/390932?swatch=03&referrer-category=collections-select-velophasis";

    $productImages = [];
    $crawlerProduct->filter('.relative img')->each(function ($node) use(&$productImages) {
        $productImages[mt_rand(1, 1122121)] = $node->eq(0)->attr('src');
    });

    return view('welcome', compact('products', 'productImages'));
});
