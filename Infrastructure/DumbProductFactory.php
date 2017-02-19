<?php

namespace Bamiz\ScreamingWebshop\Infrastructure;

use Bamiz\ScreamingWebshop\Entity\Product;
use Bamiz\ScreamingWebshop\Entity\ProductFactory;

class DumbProductFactory implements ProductFactory
{
    /**
     * @param string $name
     * @param float  $price
     *
     * @return Product
     */
    public function createProduct($name, $price)
    {
        $product = new DumbProduct(random_int(10000, 99999));
        $product->setName($name);
        $product->setPrice($price);

        return $product;
    }
}