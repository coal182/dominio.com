<?php

namespace Practicas\Bundle\Practica1Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidos')
            ->add('telefono')
            ->add('direccion')
            ->add('curso')
        ;
    }

    public function getName()
    {
        return 'practicas_bundle_practica1bundle_usuariotype';
    }
}
