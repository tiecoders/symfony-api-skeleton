<?php

namespace App\Controller;

use App\DTO\Security\SignInDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/openapi", name="openapi_")
 */
class SecurityController extends AbstractController
{
    /**
     * @Route("/signin", name="signin")
     * @param SignInDTO $SignInDTO
     * @return JsonResponse
     */
    public function signin(SignInDTO $SignInDTO)
    {
        return $this->json([
            'message' => $SignInDTO->getEmail()
        ]);
    }
}
