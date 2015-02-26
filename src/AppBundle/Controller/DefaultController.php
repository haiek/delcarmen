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
     * @Route("/club", name="index_club")
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
            $merge_vars = array('FNAME'=> $field_name);
            $mc = $this->get('hype_mailchimp');
            $data = $mc->getList()
                    ->setListId('a46c470bcf')
                    ->addMerge_vars(
                       $merge_vars
                        )
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

        return new Response('Contacto agregado correctamente');

    }    

    /**
     * @Route("/newsletter/new", name="new_campaign")
     */
    public function createCampaign()
    {
        $lista = $this->get("request")->get('listId');

        return $this->render('AppBundle:Default:crear-campania.html.php', array("lista" => $lista));
    }

    /**
     * @Route("/campania/enviar", name="send_campaign")
     */
    public function sendCampaign()
    {
        $contenido = $this->get("request")->get('contenido');
        $listId = $this->get("request")->get('listId');

        switch ($listId) {
            case '0':
                # Solo envio a la lista del club
                $mc = $this->get('hype_mailchimp');
                $data = $mc->getCampaign()->create('regular', array(
                    'list_id' => '1bc83ec652',
                    'subject' => 'Prueba de nueva campaign CLUB',
                    'from_email' => 'comyasejuega@gmail.com',
                    'from_name' => 'Del Carmen',
                    'to_name' => 'fans'
                        ), array(
                    'html'       => $contenido . '<div style="overflow: hidden; padding: 20px 10px; background: #0f0f0f;">
            <div class="col-1" style="float: left; width: 50%; text-align: left;">
                <p style="color: #FFF; font-size: 14px; line-height: 16px; margin: 0 0 20px 10px;">Salon Del Carmen<br>
                Calle 1515, Wilde</p>
                <div style="color: #FFF; margin: 0 0 0 10px;">
                    <a style="text-decoration: none; color: #FFF; font-size: 14px; line-height: 16px;" href="#">Salon Del Carmen</a>&nbsp;&nbsp;&nbsp;| &nbsp;
                    <a style="text-decoration: none; color: #FFF; font-size: 14px; line-height: 16px;" href="#">Club Del Carmen</a>
                </div>
            </div>
            <div class="col-2" style="float: left; width: 50%;">
                <ul style="padding: 0; margin: 0 10px 0 0; float: right; width: 30px;">
                    <li style="list-style: none;"><a href="#"><img src="facebook-ico-news.jpg" alt=""></a></li>
                    
                    
                </ul>
            </div>
        </div>'
                  )
                );

                $cid = $data['id'];

                $mc = $this->get('hype_mailchimp');
                $data = $mc->getCampaign()
                        ->setCi($cid)
                        ->send();
                break;
            
            case '1':
                $mc = $this->get('hype_mailchimp');
                $data = $mc->getCampaign()->create('regular', array(
                    'list_id' => 'a46c470bcf',
                    'subject' => 'Prueba de nueva campaign SALON',
                    'from_email' => 'comyasejuega@gmail.com',
                    'from_name' => 'Del Carmen',
                    'to_name' => 'fans'
                        ), array(
                    'html'       => $contenido . "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                  )
                );

                $cid = $data['id'];

                $mc = $this->get('hype_mailchimp');
                $data = $mc->getCampaign()
                        ->setCi($cid)
                        ->send();
                break;

            case '2':
                # Envio a las dos listas

                # Envio al club
                $mc = $this->get('hype_mailchimp');
                $data = $mc->getCampaign()->create('regular', array(
                    'list_id' => '1bc83ec652',
                    'subject' => 'Prueba de nueva campaign CLUB',
                    'from_email' => 'comyasejuega@gmail.com',
                    'from_name' => 'Del Carmen',
                    'to_name' => 'fans'
                        ), array(
                    'html'       => $contenido . "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                  )
                );

                $cid = $data['id'];

                $mc = $this->get('hype_mailchimp');
                $data = $mc->getCampaign()
                        ->setCi($cid)
                        ->send();

                # Envio al salon    
                
                $mc = $this->get('hype_mailchimp');
                $data = $mc->getCampaign()->create('regular', array(
                    'list_id' => 'a46c470bcf',
                    'subject' => 'Prueba de nueva campaign SALON',
                    'from_email' => 'comyasejuega@gmail.com',
                    'from_name' => 'Del Carmen',
                    'to_name' => 'fans'
                        ), array(
                    'html'       => $contenido . "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                  )
                );

                $cid = $data['id'];

                $mc = $this->get('hype_mailchimp');
                $data = $mc->getCampaign()
                        ->setCi($cid)
                        ->send();
                break;    
        }

        return new Response("Newsletter enviado correctamente");
    }

    /**
     * @Route("/newsletter", name="choose_list")
     */
    public function chooseList()
    {
        return $this->render('AppBundle:Default:elegir-lista.html.php');
    }

}
    