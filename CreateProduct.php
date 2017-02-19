<?php

namespace Bamiz\ScreamingWebshop;

use Bamiz\ScreamingWebshop\Entity\ProductFactory;
use Bamiz\UseCaseBundle\Annotation\InputProcessor;
use Bamiz\UseCaseBundle\Annotation\UseCase;

/**
 * @UseCase()
 * @InputProcessor("http")
 */
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
    public function execute(CreateProductRequest $request): CreateProductResponse
    {
        $product = $this->productFactory->createProduct($request->name, $request->price);
        $response = new CreateProductResponse();
        $response->product = $product;

        return $response;
    }
}
