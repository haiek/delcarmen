<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
    	$mailer = $this->get('mailer');
	    $message = $mailer->createMessage()
	        ->setSubject('Hello Email')
	        ->setFrom('comyasejuega@gmail.com')
	        ->setBody('test <b>mass</b>')
	    ;

	    // Send the message
		$failedRecipients = array();
		$numSent = 0;
		$to = array('haiek@yopmail.com', 'alabarce@yopmail.com' => 'Martin');

		foreach ($to as $address => $name)
		{
		  if (is_int($address)) {
		    $message->setTo($name);
		  } else {
		    $message->setTo(array($address => $name));
		  }

		  $numSent += $mailer->send($message, $failedRecipients);
		}

		printf("Sent %d messages\n", $numSent);die;



        return $this->render('default/index.html.twig');
    }
}
