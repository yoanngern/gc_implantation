<?php

namespace gospelcenterSimpleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('gospelcenterSimpleBundle:Default:index.html.twig');
    }

	public function coteAction()
	{
		return $this->render('gospelcenterSimpleBundle:Default:cote.html.twig');
	}

	public function berocheAction()
	{
		return $this->render('gospelcenterSimpleBundle:Default:beroche.html.twig');
	}

	public function fribourgAction()
	{
		return $this->render('gospelcenterSimpleBundle:Default:fribourg.html.twig');
	}
}
