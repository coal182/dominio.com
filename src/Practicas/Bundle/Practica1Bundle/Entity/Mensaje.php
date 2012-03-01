<?php

namespace Practicas\Bundle\Practica1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Practicas\Bundle\Practica1Bundle\Entity\Mensaje
 */
class Mensaje
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $idmensaje
     */
    private $idmensaje;

    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $telefono
     */
    private $telefono;

    /**
     * @var string $asunto
     */
    private $asunto;

    /**
     * @var string $mensaje
     */
    private $mensaje;


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
     * Set idmensaje
     *
     * @param integer $idmensaje
     */
    public function setIdmensaje($idmensaje)
    {
        $this->idmensaje = $idmensaje;
    }

    /**
     * Get idmensaje
     *
     * @return integer 
     */
    public function getIdmensaje()
    {
        return $this->idmensaje;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }
}