<?php

namespace Bamiz\ScreamingWebshop\Application\AppBundle\Controller;

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
        $request = [
            'name' => $httpRequest->query->get('name'),
            'price' => $httpRequest->query->get('price')
        ];

        $response = $this->get('bamiz_use_case.executor')->execute('create_product', $request);

        return new JsonResponse($this->get('serializer')->serialize($response->product, 'json'), 200, [], true);
    }
}
