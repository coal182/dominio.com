<?php

namespace Practicas\Bundle\Practica1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Practicas\Bundle\Practica1Bundle\Entity\curso
 */
class curso
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
}