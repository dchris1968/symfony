<?php

namespace SouthHills\OurSecondBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SouthHillsOurSecondBundle:Default:index.html.twig', array('name' => $name));
    }
	public function passArrayAction()
    {
        $theArray = ["red", "blue", "yellow", "green", "black"]; 
        return $this->render('SouthHillsOurSecondBundle:Default:passArray.html.twig', array('theArray' => $theArray));
    }
	public function forwardAction()
    {
        return $this->forward('SouthHillsOurSecondBundle:Default:index', array('name' => 'Chris'));		 
    }
	
	public function testRequirementAction($page)
	{
		return $this->forward('SouthHillsOurSecondBundle:Default:index', array('name' => $page));		
	}
}