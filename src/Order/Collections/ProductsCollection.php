<?php
namespace BaselinkerClient\Order\Collections;

use BaselinkerClient\Order\DTO\ProductDTO;

class ProductsCollection
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function __toString()
    {
        return json_encode( $this->get(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
    }

    public function add(ProductDTO $productDTO)
    {
        $this->products[] = $productDTO->getArray();
    }

    public function get()
    {
        return (array) $this->products;
    }
}