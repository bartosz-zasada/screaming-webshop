<?php

namespace Bamiz\ScreamingWebshop;

use Bamiz\ScreamingWebshop\Entity\ProductFactory;

class CreateProduct
{
    /**
     * @var ProductFactory
     */
    private $productFactory;

    /**
     * @param ProductFactory $productFactory
     */
    public function __construct(ProductFactory $productFactory)
    {
        $this->productFactory = $productFactory;
    }

    /**
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function execute(CreateProductRequest $request)
    {
        $product = $this->productFactory->createProduct($request->name, $request->price);
        $response = new CreateProductResponse();
        $response->product = $product;

        return $response;
    }
}
