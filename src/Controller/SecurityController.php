<?php

namespace App\Controller;

use App\DTO\Security\SignUpDTO;
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
     * @Route("/signup", name="signup")
     * @param SignUpDTO $SignUpDTO
     * @return JsonResponse
     */
    public function signup(SignUpDTO $SignUpDTO)
    {
        return $this->json([
            'message' => $SignUpDTO->getEmail()
        ]);
    }
}
