<?php

namespace MyApp\CarnetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \MyApp\CarnetBundle\Entity\Contact;
class ContactController extends Controller
{
    public function AjouterContactAction()
    {        $contact = new Contact();

        $form = $this->container->get('form.factory')->create(new \MyApp\CarnetBundle\Form\ContactType(), $contact);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {

                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($contact);
                $em->flush();
               return $this->redirect($this->generateUrl("_list_contact"));
            }
        }
  
        
        
        return $this->render('MyAppCarnetBundle:Contact:AjouterContact.html.twig', array('Form' => $form->createView()));    }

    public function ListContactAction()
    {
            $em = $this->container->get('doctrine')->getEntityManager();

        $contact = $em->getRepository('MyAppCarnetBundle:Contact')->findAll();

      
        return $this->render('MyAppCarnetBundle:Contact:ListContact.html.twig', array('Contact' => $contact));
        }

    public function SupprimerContactAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();

        $contact = $em->getRepository('MyAppCarnetBundle:Contact')->find($id);

        $em->remove($contact);

        $em->flush();

        return $this->redirect($this->generateUrl("_list_contact"));
    }

    public function ModiferContactAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $contact = $em->getRepository('MyAppCarnetBundle:Contact')->find($id);
        $form = $this->container->get('form.factory')->create(new \MyApp\CarnetBundle\Form\ContactType(), $contact);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($contact);
                $em->flush();
                return $this->redirect($this->generateUrl("_list_contact"));
            }
        }
        return $this->render('MyAppCarnetBundle:Contact:ModiferContact.html.twig', array('Form' => $form->createView()));
    }

}
