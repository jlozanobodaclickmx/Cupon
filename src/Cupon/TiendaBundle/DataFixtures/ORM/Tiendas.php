<?
namespace Cupon\TiendaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\TiendaBundle\Entity\Tienda;

class Tiendas extends AbstractFixture implements OrderedFixtureInterface

{
    public function getOrder()
    {
        return 1;
    }
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 400; $i++)
        {
            $tienda = new Tienda();
            $tienda->setNombre('Tienda '.$i);
            $tienda->setLogin('Login'.$i);
            $tienda->setPassword('Password'.$i);
            $tienda->setSalt('Salt'.$i);
            $tienda->setDescripcion('Descripcion'.$i);
            $tienda->setDireccio('Direccion'.$i);
            $tienda->setCiudad($ciudad);


            $manager->persist($tienda);
        }
        $manager->flush();
    }

}
