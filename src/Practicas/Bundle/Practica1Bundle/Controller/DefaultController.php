<?php

namespace Practicas\Bundle\Practica1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


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
}
