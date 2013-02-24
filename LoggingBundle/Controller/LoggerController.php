<?php

namespace Mobile\LoggingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mobile\LoggingBundle\Entity\Logger;

/**
 * Logger controller.
 *
 */
class LoggerController extends Controller
{
    /**
     * Lists all Logger entities.
     *
     */
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        //$entities = $em->getRepository('MobileLoggingBundle:Logger')->findAll();
        $entities =  $em->createQuery("SELECT p FROM MobileLoggingBundle:Logger p ORDER BY p.id DESC")->setFirstResult(0)->setMaxResults(8)->getResult();

        return $this->render('MobileLoggingBundle:Logger:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Logger entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MobileLoggingBundle:Logger')->find($id);
       

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Logger entity.');
        }

        return $this->render('MobileLoggingBundle:Logger:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

}
