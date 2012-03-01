<?php

namespace Practicas\Bundle\Practica1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Practicas\Bundle\Practica1Bundle\Entity\Mensaje;
use Practicas\Bundle\Practica1Bundle\Entity\Entrada;

class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
		$em = $this->getDoctrine()->getEntityManager();
    	$cursos= $em->getRepository('Practica1Bundle:Curso')->findAll();
    	$usuarios= null;
        return $this->render('Practica1Bundle:Default:plantilla.html.twig', array('name' => $name,'cursos' => $cursos,'usuarios' => $usuarios));
    }

	public function userAction($name)
    {
        return $this->render('Practica1Bundle:Default:'.$name.'.html.twig', 		array('name' => $name));
    }
    
   public function cursoAction($name)
    {
    	$em = $this->getDoctrine()->getEntityManager();
		$cursos= $em->getRepository('Practica1Bundle:Curso')->findAll();
    	
		$curso= $em->getRepository('Practica1Bundle:Curso')->findOneBynombrecurso($name);
		$usuarios= $em->getRepository('Practica1Bundle:Usuario')->findByCurso($curso->getId());
    		return $this->render('Practica1Bundle:Default:plantilla.html.twig', array('name' => $name,'cursos' => $cursos,'usuarios' => $usuarios));
    	}
   public function adminAction()
    {
	$em = $this->getDoctrine()->getEntityManager();
		$cursos= $em->getRepository('Practica1Bundle:Curso')->findAll();

	return $this->render('Practica1Bundle:Default:backend.html.twig',array('cursos' => $cursos));
    }
    public function deletecursoAction($idcurso)
    {
		$em = $this->getDoctrine()->getEntityManager();
		$cursos= $em->getRepository('Practica1Bundle:Curso')->findAll();
	$curso= $em->getRepository('Practica1Bundle:Curso')->findOneByid($idcurso);
	$em->remove($curso);
	$em->flush();
	$cursos= $em->getRepository('Practica1Bundle:Curso')->findAll();
	return $this->redirect($this->generateUrl('home'));

    }
    
    public function contactoAction()
    {
        $name="Contacto";
        $usuarios=null;
        $em = $this->getDoctrine()->getEntityManager();
		$cursos= $em->getRepository('Practica1Bundle:Curso')->findAll();
	return $this->render('Practica1Bundle:Default:contacto.html.twig',array('cursos' => $cursos, 'name' => $name, 'usuarios' => $usuarios));
    }
    
    public function enviarmailAction()
{
        $usuarios=null;
        $cursos=null;
        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $tlf=$_POST["tlf"];
        $asunto=$_POST["asunto"];
        $mensaje=$_POST["mensaje"];
    $message = \Swift_Message::newInstance()
        ->setSubject($asunto)
        ->setFrom('symfony@symfony.com')
        ->setTo('coal182@gmail.com')
        ->setBody($this->renderView('Practica1Bundle:Default:mail.txt.twig', array('nombre' => $nombre, 
            'email' => $email, 'tlf' => $tlf, 'asunto' => $asunto, 'mensaje' => $mensaje)))
    ;
    $this->get('mailer')->send($message);
    
    $entity  = new Mensaje();
    $entity->setNombre($nombre);
    $entity->setEmail($email);
    $entity->setTelefono($tlf);
    $entity->setAsunto($asunto);
    $entity->setMensaje($mensaje);
    $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
    
    return $this->render('Practica1Bundle:Default:contacto.html.twig',array('cursos' => $cursos, 'name' => 'Enviado', 'usuarios' => $usuarios));
}

    public function nuevaentradaAction()
    {
	return $this->render('Practica1Bundle:Default:nuevaentrada.html.twig');
    }
    
    public function crearentradaAction()
    {
        $titulo=$_POST["titulo"];
        $contenido=$_POST["contenido"];
        $creado=new \DateTime();
        
        $entity  = new Entrada();
        $entity->setTitulo($titulo);
        $entity->setContenido($contenido);
        $entity->setCreado($creado);
        
        $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
        
	return $this->render('Practica1Bundle:Default:nuevaentrada.html.twig');
    }
    
    public function listarentradasAction()
    {
        $usuarios=null;
        $cursos=null;
        $name="HOME";
    $em = $this->getDoctrine()->getEntityManager();
		$entradas= $em->getRepository('Practica1Bundle:Entrada')->findAll();
	
    		return $this->render('Practica1Bundle:Default:home.html.twig', array('name' => $name,'entradas' => $entradas, 'cursos' => $cursos, 'usuarios' => $usuarios));
    	}    
        
}
