<?php

// src/Security/AccessDeniedHandler.php
namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        $content = 'Vos permissions de compte (utilisateur) ne vous donne pas accès au Back-office du site.<br/>
        Si vous disposez d\'un compte Administrateur <a href="/deconnexion">déconnectez-vous</a> du compte actuel et connectez-vous avec votre compte administrateur pour accèder au Back-office.';

        return new Response($content, 403);

        /*return $this->render('403.html.twig');*/
    }
}