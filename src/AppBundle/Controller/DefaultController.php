<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index_salon")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Default:index-salon.html.php');
    }

    /**
     * @Route("/club", name="index_salon")
     */
    public function clubIndexAction()
    {
        return $this->render('AppBundle:Default:index-club.html.php');
    }

    /**
     * @Route("/contacto", name="contact_form")
     */
    public function contactFormAction()
    {

        $field_email = $this->get("request")->get('email');
        $field_subject = $this->get("request")->get('subject');
        $field_name = $this->get("request")->get('name');
        $field_message = $this->get("request")->get('message');
        

        $mail_to = 'aj.alabarce@gmail.com';
        $subject = '#Mensaje# '. $field_subject ;

        $body_message = 'From: '. $field_name."\n";
        $body_message .= 'E-mail: '. $field_email."\n";
        $body_message .= 'Mensaje: '. $field_message."\n";

        $mailer = $this->get('mailer');
        $message = $mailer->createMessage()
            ->setSubject("[Contacto]" . $field_subject)
            ->setFrom($field_email)
            ->setBody($body_message)
            ->setTo($mail_to)
        ;

        $mailer->send($message);

        $subscribe = $this->get("request")->get('subscribe');

        if ($subscribe == "yes")
        {
            $mc = $this->get('hype_mailchimp');
            $data = $mc->getList()
                    ->setListId('a46c470bcf')
                    ->subscribe($field_email);
        }

        return $this->render('AppBundle:Default:index-salon.html.php');
    }

    /**
     * @Route("/miembros", name="list_members")
     */
    public function listMemberAction()
    {
    	$mc = $this->get('hype_mailchimp');
        $data = $mc->getList()->members();
        //var_dump($data['data']);

        $members = $data['data'];
        //var_dump($members);die;
        return $this->render('AppBundle:Default:members.html.php', array('members' => $members));
    }

    /**
     * @Route("/miembros/eliminar", name="delete_member")
     */
    public function deleteMemberAction()
    {
       // Recibo el parametro eid por POST
        $eid = $this->get("request")->get('eid');
        $listId = $this->get("request")->get('listId');

        $mc = $this->get('hype_mailchimp');
        $data = $mc->getList()
                ->setListId('a46c470bcf')
                ->unsubscribe($eid);

        return new Response('Contacto eliminado correctamente');

    }

    /**
     * @Route("/miembros/agregar", name="new_member")
     */
    public function createMemberAction()
    {
       // Recibo el parametro email por POST
        $email = $this->get("request")->get('email');
        $nombre = $this->get("request")->get('nombre');
        $apellido = $this->get("request")->get('apellido');
        $listId = $this->get("request")->get('listId');

        $merge_vars = array('FNAME'=>$nombre, 'LNAME'=>$apellido);

        $mc = $this->get('hype_mailchimp');
        $data = $mc->getList()
                    ->setListId('a46c470bcf')
                ->addMerge_vars(
                       $merge_vars
                )
                ->subscribe($email);

        var_dump($data);die;        

        return new Response('Contacto agregado correctamente');

    }    

    /**
     * @Route("/newsletter/new", name="new_campaign")
     */
    public function createCampaign()
    {
        return $this->render('AppBundle:Default:crear-campania.html.php');
    }

    /**
     * @Route("/campania/enviar", name="send_campaign")
     */
    public function sendCampaign()
    {
        $contenido = $this->get("request")->get('contenido');

        $mc = $this->get('hype_mailchimp');
        $data = $mc->getCampaign()->create('regular', array(
            'list_id' => 'a46c470bcf',
            'subject' => 'Prueba de nueva campaign',
            'from_email' => 'comyasejuega@gmail.com',
            'from_name' => 'Del Carmen',
            'to_name' => 'fans'
                ), array(
            'html'       => $contenido . "<img width='200' src='http://www.masiaaguasvivas.com/wp-content/themes/config/functions/thumb.php?src=http://www.masiaaguasvivas.com/img/resized_IMG_0837.jpg&h=352&w=352&zc=1'>"
          )
        );

        $cid = $data['id'];

        $mc = $this->get('hype_mailchimp');
        $data = $mc->getCampaign()
                ->setCi($cid)
                ->send();

                echo $cid;die;
    }

    /**
     * @Route("/newsletter", name="choose_list")
     */
    public function chooseList()
    {
        return $this->render('AppBundle:Default:elegir-lista.html.php');
    }

}
    