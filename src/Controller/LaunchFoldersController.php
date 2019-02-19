<?php

namespace App\Controller;

use App\Entity\LaunchFolders;
use App\Form\LaunchFoldersType;
use App\Repository\LaunchFoldersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/launch/folders")
 */
class LaunchFoldersController extends AbstractController
{
    /**
     * @Route("/", name="launch_folders_index", methods={"GET"})
     */
    public function index(LaunchFoldersRepository $launchFoldersRepository): Response
    {
        return $this->render('launch_folders/index.html.twig', [
            'launch_folders' => $launchFoldersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="launch_folders_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $launchFolder = new LaunchFolders();
        $form = $this->createForm(LaunchFoldersType::class, $launchFolder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($launchFolder);
            $entityManager->flush();

            return $this->redirectToRoute('launch_folders_index');
        }

        return $this->render('launch_folders/new.html.twig', [
            'launch_folder' => $launchFolder,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="launch_folders_show", methods={"GET"})
     */
    public function show(LaunchFolders $launchFolder): Response
    {
        return $this->render('launch_folders/show.html.twig', [
            'launch_folder' => $launchFolder,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="launch_folders_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LaunchFolders $launchFolder): Response
    {
        $form = $this->createForm(LaunchFoldersType::class, $launchFolder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('launch_folders_index', [
                'id' => $launchFolder->getId(),
            ]);
        }

        return $this->render('launch_folders/edit.html.twig', [
            'launch_folder' => $launchFolder,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="launch_folders_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LaunchFolders $launchFolder): Response
    {
        if ($this->isCsrfTokenValid('delete'.$launchFolder->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($launchFolder);
            $entityManager->flush();
        }

        return $this->redirectToRoute('launch_folders_index');
    }
}
