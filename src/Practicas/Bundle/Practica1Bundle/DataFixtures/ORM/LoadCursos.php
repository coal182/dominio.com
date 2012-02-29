<?php
namespace Practicas\Bundle\Practica1Bundle\DataFixtures;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Practicas\Bundle\Practica1Bundle\Entity\Curso;

class LoadCursos extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    $cursos = array(
array('nombrecurso' => 'curso1', 'descripcion' => "Curso Telematica"),
array('nombrecurso' => 'curso2', 'descripcion' => "Curso Musica"),
array('nombrecurso' => 'curso3', 'descripcion' => "Curso Diseño"),
array('nombrecurso' => 'curso4', 'descripcion' => "Curso Java"),
array('nombrecurso' => 'curso5', 'descripcion' => "Curso PHP"),
);
foreach ($cursos as $curso) {
    $entidad = new Curso();
    $entidad->setNombrecurso($curso['nombrecurso']);
    $entidad->setDescripcion($curso['descripcion']);
    $manager->persist($entidad);
}
$manager->flush();
}

   public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }

}
?>
