<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/** 
	* @Route("/home", name="home")
*/
	class HomeController extends AbstractController
	{
    #[Route('/index', name: 'index')]
		public function index()
		{
			return $this->render('home/index.html.twig', [
				'controller_name' => 'HomeController',
			]);
		}

	#[Route('/helloUser/{name}', name:'hello_user')]

		public function helloUser(Request $request, $name)
		{
		// request
		// $name =  $request->get('name');
		//
			return $this->render('home/great.html.twig',[
				'name' => $name,

			]);
		}
	}
