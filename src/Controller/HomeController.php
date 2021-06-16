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

		// Perbedaan antara createForm & createFormBuilder
			$form = $this->createFormBuilder()
			->add('fullname')
			->getForm()
			;

			$person = [
				'name' => 'Media',
				'lastname' => 'Jabar',
				'age' => '20'
			];
			return $this->render('home/great.html.twig',[
				'person' => $person,
				'user_form' => $form->createView()

			]);
		}
	}
