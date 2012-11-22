<?
namespace Cupon\UsuarioBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\UsuarioBundle\Entity\Usuario;

class Usuarios extends AbstractFixture implements OrderedFixtureInterface

{
    public function getOrder()
    {
        return 1;
    }
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 400; $i++)
        {
            $usuario = new Usuario();
            $usuario->setNombre('Usuario '.$i);
            $usuario->setApellidos('Apellidos'.$i);
            $usuario->setEmail('Email'.$i);
            $usuario->setPassword('Password'.$i);
            $usuario->setSalt('Salt'.$i);
            $usuario->setDireccion('Direccion'.$i);
            $usuario->setPermiteEmail(true);
            $usuario->setFechaAlta(new \DateTime());
            $usuario->setFechaNacimiento(new \DateTime());
            $usuario->setDni('DNI'.$i);
            $usuario->setNumeroTarjeta('NumTarj'.$i);
            $usuario->setCiudad($ciudad);


             $manager->persist($usuario);
        }
        $manager->flush();
    }

}
