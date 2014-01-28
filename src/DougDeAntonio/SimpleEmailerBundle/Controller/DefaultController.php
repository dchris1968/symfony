<?php

namespace DougDeAntonio\SimpleEmailerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DougDeAntonioSimpleEmailerBundle:Default:index.html.twig', array('name' => $name));
    }
	public function enlightenAction()
	{
		return $this->render('DougDeAntonioSimpleEmailerBundle:Default:index.html.twig');
	}
}
