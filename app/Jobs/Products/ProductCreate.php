<?php

namespace App\Jobs\Products;

use App\Models\Tag;
use App\Models\Product;
use App\Models\Variant;
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
        $tags = $this->data['tags'] ?? [];
        unset($this->data['tags']);

        // product create in DB.
        $product = Product::create($this->data);
        if(count($variantData) > 1){
            $variants = [];
            foreach ($variantData['product_types'] as $key => $value) {
                if ($key == 0) {
                    Variant::create([
                        'product_id' => $product->id,
                        'sku' => $variantData['sku'],
                        'barcode' => $variantData['barcode'],
                        'title' => $value['product_type_title'],
                        'inventory_quantity' => $variantData['inventory_quantity'],
                        'price' => $value['product_type_value'] ?? $this->data['product_price']
                    ]);

                }else{
                    Variant::create([
                        'product_id' => $product->id,
                        'sku' => rand(0000000000000,9999999999999),
                        'barcode' => rand(0000000000000,9999999999999),
                        'title' => $value['product_type_title'],
                        'inventory_quantity' => $variantData['inventory_quantity'],
                        'price' => $value['product_type_value'] ?? $this->data['product_price']
                    ]);
                }
            }
        }
        $tags = json_decode($tags['product_tags'] ?? '{}',true);
        foreach ($tags as $key => $value) {
            $product->tags()->save(
                Tag::make($value)
            );
        }
    }
}