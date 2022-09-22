<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route("/example/",name:"student_example")]
    public function example(): Response
    {
        return new Response('Hello example!');
    }

    #[Route('/exampleRequest', name:'student_exampleRequest')]
    public function exampleRequest(Request $request):Response {
        return new Response($request->attributes->get('_route'));
    }

    #[Route('/exampleRedirect', name:'student_exampleRedirect')]
    public function exampleRedirect():RedirectResponse {
        return $this->redirect('https://www.google.com');
    }

    #[Route('/exampleRedirectToRoute', name:'student_exampleRedirectToRoute')]
    public function exampleRedirectToRoute():RedirectResponse {
        return $this->redirectToRoute("index_page");
    }
}