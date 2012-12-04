<?php
namespace Cupon\OfertaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
class DefaultController extends Controller
{
    public function ayudaAction()
    {
    return $this->render('OfertaBundle:Default:ayuda.html.twig');
    }

    public function portadaAction($ciudad)
        {
             /*  if (null == $ciudad) {
                   $ciudad = $this->container->getParameter('cupon.ciudad_por_defecto');
                   return new RedirectResponse($this->generateUrl('portada', array('ciudad' => $ciudad))
                   );
        }*/
            $em = $this->getDoctrine()->getEntityManager();
           /* $oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
                'ciudad' => $this->container->getParameter('cupon.ciudad_por_defecto'),
                'fecha_publicacion' => new \DateTime('today')
                ));*/
            $oferta = $em->getRepository('OfertaBundle:Oferta')->findOfertaDelDia($ciudad);

            $log = $this->get('logger');
            $log->addInfo ('Generada la portada en '.$tiempo.' milisegundos');

            if (!$oferta) {
                throw $this->createNotFoundException('No se ha encontrado la oferta del día en la ciudad seleccionada');
            }

            return $this->render( 'OfertaBundle:Default:portada.html.twig',
                array('oferta' => $oferta)
                 );


    }

    public function ofertaAction($ciudad, $slug)
    {
     $em = $this->getDoctrine()->getEntityManager();
     $oferta = $em->getRepository('OfertaBundle:Oferta')->findOferta($ciudad, $slug);

     return $this->render('OfertaBundle:Default:detalle.html.twig', array('oferta' => $oferta));

    }

}
