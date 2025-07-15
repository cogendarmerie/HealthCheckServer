<?php

namespace Cogendar38\HealthCheckServer\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class StatusController extends AbstractController
{
    public function status(): JsonResponse
    {
        return $this->json([
            'status' => 'ok',
            'attributes' => [
                [
                    'label' => 'Health Check Server',
                    'value' => 'running'
                ]
            ]
        ]);
    }
}