<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AcceuilController
 *
 * @author tpben
 */
class AcceuilController {
    //put your code here
    #[Route('/', name: 'accueil')]
    public function index(): Response {
        return new Response('Hello world !');
    }
}
