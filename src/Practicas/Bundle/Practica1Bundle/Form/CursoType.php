<?php

namespace Practicas\Bundle\Practica1Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CursoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombrecurso')
            ->add('descripcion')
        ;
    }

    public function getName()
    {
        return 'practicas_bundle_practica1bundle_cursotype';
    }
}
