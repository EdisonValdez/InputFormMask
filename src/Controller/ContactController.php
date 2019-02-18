<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $emailMessage = (new \Swift_Message('You got Email!'))
            ->setFrom($data['email'])
            ->setTo('piefool@mailinator.com')
            ->setBody($data['message'],
                'text/plain');

            $mailer->send($emailMessage);
            $this->addFlash('success', 'Your message has been sent!');
            return $this->redirectToRoute('contact');

        }
       return $this->render('contact/contact.html.twig', [
            'our_form' => $form->createView()
        ]);
    }
}
