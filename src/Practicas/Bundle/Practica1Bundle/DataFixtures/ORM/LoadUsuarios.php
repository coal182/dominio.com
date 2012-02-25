<?php
namespace Practicas\Bundle\Practica1Bundle\DataFixtures;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Practicas\Bundle\Practica1Bundle\Entity\Usuario;

class LoadUsuarios implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
    $usuarios = array(
array('nombre' => 'Cristian', 'apellidos' => "Martín",'telefono'=>"677122878",'curso'=>1),
array('nombre' => 'pepe', 'apellidos' => "gomez",'telefono'=>"952684898",'curso'=>2),
array('nombre' => 'Laura', 'apellidos' => "Díaz",'telefono'=>"677122878",'curso'=>3),
array('nombre' => 'Vincent', 'apellidos' => "Law",'telefono'=>"677122878",'curso'=>4),
array('nombre' => 'Pino', 'apellidos' => "autoreiv",'telefono'=>"677122878",'curso'=>5),
);
foreach ($usuarios as $usuario) {
    $entidad = new Usuario();
    $entidad->setApellidos($usuario['apellidos']);
    $entidad->setNombre($usuario['nombre']);
    $entidad->setTelefono($usuario['telefono']);
    $entidad->setCurso($usuario['curso']);
    $manager->persist($entidad);
}
$manager->flush();
}
}
?>
