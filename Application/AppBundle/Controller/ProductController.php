<?php

namespace Bamiz\ScreamingWebshop\Application\AppBundle\Controller;

use Bamiz\ScreamingWebshop\CreateProductRequest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * @param Request $httpRequest
     *
     * @return JsonResponse
     */
    public function createAction(Request $httpRequest): JsonResponse
    {
        $request = new CreateProductRequest();
        $request->name = $httpRequest->query->get('name');
        $request->price = $httpRequest->query->get('price');

        $useCase = $this->get('create_product_use_case');
        $response = $useCase->execute($request);

        return new JsonResponse($this->get('serializer')->serialize($response->product, 'json'), 200, [], true);
    }
}
