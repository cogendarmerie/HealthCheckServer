<?php

namespace Cogendar38\HealthCheckServer\Controller;

use Cogendar38\HealthCheckServer\Collection\AttributeCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class AbstractStatusController extends AbstractController
{
    protected function statusResponse(string $status, AttributeCollection $attributes): JsonResponse
    {
        return new JsonResponse([
            'datetime' => (new \DateTime())->format('Y-m-d H:i:s'),
            'status' => $status,
            'attributes' => $attributes->getJson()
        ]);
    }
}