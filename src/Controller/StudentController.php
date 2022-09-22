<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/index", name="student_index")
     */
    public function index(): Response
    {
        return new Response('Hello index!');
    }

    #[Route("/example",name:"student_example")]
    public function example(): Response
    {
        return new Response('Hello example!');
    }
}