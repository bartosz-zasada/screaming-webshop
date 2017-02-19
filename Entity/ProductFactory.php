<?php

namespace Bamiz\ScreamingWebshop\Entity;

interface ProductFactory
{
    /**
     * @param string $name
     * @param float  $price
     *
     * @return Product
     */
    public function createProduct($name, $price);
}