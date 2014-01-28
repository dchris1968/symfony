<?php

namespace SouthHills\OurFirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SouthHillsOurFirstBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function jumpAction($name)
	{	
		return $this->render('SouthHillsOurFirstBundle:Default:jump.html.twig', array('name' => $name));
	}
	
	public function diveAction($name)
	{	
		return $this->render('SouthHillsOurFirstBundle:Default:dive.html.twig', array('name' => $name));
	}
	
	public function contactUsAction()
	{
		return new Response('<html><body><h1>Contact Us</h1></body></html>');
	}
	
	public function testGlobalTemplateAction()
	{	
		return $this->render('SouthHillsOurFirstBundle:Default:testGlobalTemplate.html.twig');
	}
}
