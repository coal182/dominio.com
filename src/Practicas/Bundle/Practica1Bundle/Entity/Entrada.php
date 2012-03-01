<?php

namespace Practicas\Bundle\Practica1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Practicas\Bundle\Practica1Bundle\Entity\Entrada
 */
class Entrada
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $titulo
     */
    private $titulo;

    /**
     * @var string $contenido
     */
    private $contenido;

    /**
     * @var datetime $creado
     */
    private $creado;


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
     * Set titulo
     *
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set creado
     *
     * @param datetime $creado
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;
    }

    /**
     * Get creado
     *
     * @return datetime 
     */
    public function getCreado()
    {
        return $this->creado;
    }
}