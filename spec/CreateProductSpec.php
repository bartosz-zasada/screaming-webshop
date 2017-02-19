<?php

namespace spec\Bamiz\ScreamingWebshop;

use Bamiz\ScreamingWebshop\CreateProduct;
use Bamiz\ScreamingWebshop\CreateProductRequest;
use Bamiz\ScreamingWebshop\Entity\Product;
use Bamiz\ScreamingWebshop\Entity\ProductFactory;
use PhpSpec\ObjectBehavior;

class CreateProductSpec extends ObjectBehavior
{
    public function let(ProductFactory $productFactory)
    {
        $this->beConstructedWith($productFactory);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(CreateProduct::class);
    }

    public function it_creates_a_new_product(ProductFactory $productFactory, Product $product)
    {
        $request = new CreateProductRequest();
        $request->name = 'Awesome laptop';
        $request->price = 666.66;

        $productFactory->createProduct($request->name, $request->price)->willReturn($product);

        $response = $this->execute($request);
        $response->product->shouldBe($product);
    }
}
