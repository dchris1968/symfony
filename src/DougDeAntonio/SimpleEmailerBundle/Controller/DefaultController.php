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
	public function emailAction($emailAddress)
	{
		$message = \Swift_Message::newInstance()
			->setSubject('Email Hello!')
			->setFrom('dchris1968b@gmail.com')
			->setTo($emailAddress)
			->setBody('Welcome to my email!');
		$this->get('mailer')->send($message);
		
		return $this->render('DougDeAntonioSimpleEmailerBundle:Default:index.html.twig');
	}
}
