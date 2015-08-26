<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerAware;

class DefaultController extends ContainerAware {

    /**
     * @Route("/")
     */
    public function indexAction() {
	$html = $this->container->get('twig')->render(
	    'default/index.html.twig', array('message' => 'Howdy partner! Welcome to a slimmed down version of Symfony2!')
	);
	//Testing web debug toolbar output
//		dump($this->container);

	return new Response($html);
    }

}
