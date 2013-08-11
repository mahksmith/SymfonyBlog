<?php

namespace MarkSmith\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MarkSmith\BlogBundle\Entity\BlogEntry;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('MarkSmithBlogBundle:BlogEntry');
            
        $entries = $repository->findAll();
        
        $response = $this->render(
            'MarkSmithBlogBundle:Default:index.html.twig',
            array('entries' => $entries));
                
        return $response;
    }
    
    public function viewAction($id)
    {
        
        // For some reason, the following only gets id and date
        
        $entry = $this->getDoctrine()
            ->getRepository('MarkSmithBlogBundle:BlogEntry')
            ->findOneById($id);

        if (!$entry) {
            throw $this->createNotFoundException(
                'No blog entry found for id '.$id
            );
        }
        
                    
        $response = $this->render(
            'MarkSmithBlogBundle:Default:view.html.twig',
            array('title' => $entry->getTitle(),
                  'datetime' => $entry->getDate()->format('Y-m-d H:i:s'),
                  'content' => $entry->getContent()
        ));
        
        return $response;
        
    }
    
    public function createAction(Request $request) 
    {
        
        $entry = new BlogEntry();
        
        $form = $this->createFormBuilder($entry)
            ->add('title', 'text')
            ->add('content', 'textarea')
            ->add('save', 'submit')
            ->getForm();
        
        $form->handleRequest($request);
            
        if ($form->isValid()) {
            //Save the new Blog entry to database
            $entry = $form->getData();
            $entry->setContent(str_replace ("\r\n",'<br/>',
                $entry->getContent())); 
            $entry->setDate(new \DateTime());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entry);
            $em->flush();
            
            return $this->redirect('/blog/');
        }
        
        
        return $this->render('MarkSmithBlogBundle:Default:create.html.twig',
            array('form' => $form->createView()));
        
    }
}
