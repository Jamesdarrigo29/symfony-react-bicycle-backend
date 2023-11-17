<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BicycleController extends AbstractController
{
    /**
     * @Route("/api/bicycle/run", name="run_bicycle", methods={"GET", "OPTIONS"})
     */
    public function runBicycle(): JsonResponse
    {
        $response = new JsonResponse(['message' => 'Bicycle successfully ran'], Response::HTTP_OK);

        $response->headers->set('Access-Control-Allow-Origin', 'https://symfony-react-bicycle-app.vercel.app');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type');

        return $response;
    }

    /**
     * @Route("/api/bicycle/test", name="test_endpoint", methods={"GET"})
     */
    public function testEndpoint(): JsonResponse
    {
        return new JsonResponse(['message' => 'This is a test endpoint'], Response::HTTP_OK);
    }
}
