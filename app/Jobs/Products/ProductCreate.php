<?php

namespace App\Jobs\Products;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\Transformers\ProductsDataTransformers;

class ProductCreate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;
    private $image;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $variantData = $this->data['variants'];
        unset($this->data['variants']);

        $tags = $this->data['tags'];
        unset($this->data['tags']);

        // product create in DB.
        $product = Product::create($this->data);
        dd($product);
    }
}