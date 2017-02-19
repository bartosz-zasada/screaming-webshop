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
        $response = $this->get('bamiz_use_case.executor')->execute('create_product', $httpRequest);

        return new JsonResponse($this->get('serializer')->serialize($response->product, 'json'), 200, [], true);
    }
}
