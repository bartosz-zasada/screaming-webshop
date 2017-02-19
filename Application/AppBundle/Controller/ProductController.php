<?php

namespace Bamiz\ScreamingWebshop\Application\AppBundle\Controller;

use Bamiz\UseCaseBundle\Controller\UseCaseExecutingController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends UseCaseExecutingController
{
    /**
     * @param Request $httpRequest
     *
     * @return JsonResponse
     */
    public function createAction(Request $httpRequest): JsonResponse
    {
        return $this->createProduct($httpRequest);
    }
}
