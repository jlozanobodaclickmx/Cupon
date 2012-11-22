<?
namespace Cupon\CiudadBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\CiudadBundle\Entity\Ciudad;

class Ciudades extends AbstractFixture implements OrderedFixtureInterface

{
    public function getOrder()
    {
        return 1;
    }

    public function load(ObjectManager $manager)

    {
        $ciudades = array(
            array('nombre' => 'Madrid'),
            array('nombre' => 'Barcelona'),
        );

        foreach ($ciudades as $ciudad) {
            $entidad = new Ciudad();

            $entidad->setNombre($ciudad['nombre']);

            $manager->persist($entidad);
        }

        $manager->flush();
    }
}
