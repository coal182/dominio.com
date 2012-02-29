<?php
namespace Practicas\Bundle\Practica1Bundle\DataFixtures;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Practicas\Bundle\Practica1Bundle\Entity\Usuario;

class LoadUsuarios extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$usuarios = array(
array('nombre' => 'Cristian', 'apellidos' => "Martín",'telefono'=>"677122878",'curso'=>'Curso1'),
array('nombre' => 'pepe', 'apellidos' => "gomez",'telefono'=>"952684898",'curso'=>'Curso2'),
array('nombre' => 'Laura', 'apellidos' => "Díaz",'telefono'=>"677122878",'curso'=>'Curso3'),
array('nombre' => 'Vincent', 'apellidos' => "Law",'telefono'=>"677122878",'curso'=>'Curso4'),
array('nombre' => 'Pino', 'apellidos' => "autoreiv",'telefono'=>"677122878",'curso'=>'Curso5'),
);
foreach ($usuarios as $usuario) {
    $entidad = new Usuario();
    $entidad->setApellidos($usuario['apellidos']);
    $entidad->setNombre($usuario['nombre']);
    $entidad->setTelefono($usuario['telefono']);
    $entidad->setCurso($manager->getRepository('Practica1Bundle:Curso')->findOneBynombrecurso($usuario['curso']));
    $manager->persist($entidad);
}
$manager->flush();
}
	public function getOrder() {
		return 2;
}
}
?>
