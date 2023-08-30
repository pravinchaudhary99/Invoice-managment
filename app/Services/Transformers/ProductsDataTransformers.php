<?php

namespace App\Services\Transformers;

class ProductsDataTransformers
{
    private $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function transform()
    {
        $productData = [];
        $productData = $this->productData();
        $productData['variants'] = $this->variantData();
        $productData['tags'] = $this->tags();

        return $productData;
    }

    private function productData() {
        return [
            'product_name' => $this->data['product_name'],
            'product_price' => $this->data['product_price'],
            'product_tax' => $this->data['product_tax'] ?? 0,
            'product_discount_type' => $this->data['product_discount_type'],
            'product_discount' => $this->data['product_discount'],
            'product_description' => $this->data['product_description'] ?? '',
            'category' => $this->data['category'],
            'status' => $this->data['status'],
        ];
    }

    private function variantData(){
        return [
            'sku' => $this->data['sku'],
            'barcode' => $this->data['barcode'] ?? null,
            'inventory_quantity' => $this->data['product_qty'],
            'title' => $this->data['product_types']
        ];
    }

    private function tags() {
        return [
            'product_tags' => $this->data['product_tags']
        ];
    }
}

