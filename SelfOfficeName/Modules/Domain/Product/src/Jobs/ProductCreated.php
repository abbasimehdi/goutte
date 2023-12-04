<?php

namespace Selfofficename\Modules\Domain\Product\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Selfofficename\Modules\Domain\Product\Models\Product;

class ProductCreated implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private $data)
    {
        $this->data = $data;
    }

    /**
     * @TODO
     * Handle by 4 layer architecture
     * Execute the job.
     */
    public function handle()
    {
        Product::query()->create([
           'id'           => $this->data['id'],
           'title'        => $this->data['title'],
           'image'        => $this->data['image'],
           'created_at'   => $this->data['created_at'],
           'updated_at'   => $this->data['updated_at'],
        ]);
    }
}
