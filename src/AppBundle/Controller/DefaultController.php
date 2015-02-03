<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
    	
/*
    //	CREAR CAMPAÑA

    	$mc = $this->get('hype_mailchimp');
        $data = $mc->getCampaign()->create('regular', array(
            'list_id' => 'a46c470bcf',
            'subject' => 'test created subject',
            'from_email' => 'comyasejuega@gmail.com',
            'from_name' => 'Del Carmen',
            'to_name' => 'fans'
                ), array(
            'html' => '<h5>Prueba de mailchimp</h5>',
            'sections' => array(),
            'text' => '<b>test</b>',
            'url' => 'http://www.salondelcarmen.com.ar',
            'archive' => 'test'
        ));
        var_dump($data);
        

        ENVIAR CAMPAÑA
 */
        $mc = $this->get('hype_mailchimp');
 	    $data = $mc->getCampaign()
                ->setCi('57beb7e2be')
                ->send();

        var_dump($data);

die;
        return $this->render('default/index.html.twig');
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
        $listId = $this->get("request")->get('listId');

       /* $merge_vars = array('FNAME'=>"AGUS");

        $mc = $this->get('hype_mailchimp');
        $data = $mc->getList()
                    ->setListId('a46c470bcf')
                ->addMerge_vars(
                       $merge_vars
                )
                ->subscribe('a.alabarce@hotmail.com');
*/

               $mc = $this->get('hype_mailchimp');
            $data = $mc->getList()
                        ->memberInfo("a.alabarce@hotmail.com");

        var_dump($data);die;        
        return new Response('Contacto agregado correctamente');

    }    

    /**
     * @Route("/campania/crear", name="new_campaign")
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

}
    