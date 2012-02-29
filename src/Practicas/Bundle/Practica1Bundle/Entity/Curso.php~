<?php

namespace Practicas\Bundle\Practica1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Practicas\Bundle\Practica1Bundle\Entity\Curso
 */
class Curso
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $nombrecurso
     */
    private $nombrecurso;

    /**
     * @var string $descripcion
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombrecurso
     *
     * @param string $nombrecurso
     */
    public function setNombrecurso($nombrecurso)
    {
        $this->nombrecurso = $nombrecurso;
    }

    /**
     * Get nombrecurso
     *
     * @return string 
     */
    public function getNombrecurso()
    {
        return $this->nombrecurso;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * @var Practicas\Bundle\Practica1Bundle\Entity\Usuario
     */
    private $cursoid;

    public function __construct()
    {
        $this->cursoid = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add cursoid
     *
     * @param Practicas\Bundle\Practica1Bundle\Entity\Usuario $cursoid
     */
    public function addUsuario(\Practicas\Bundle\Practica1Bundle\Entity\Usuario $cursoid)
    {
        $this->cursoid[] = $cursoid;
    }

    /**
     * Get cursoid
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCursoid()
    {
        return $this->cursoid;
    }
}