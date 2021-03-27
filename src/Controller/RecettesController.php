<?php

namespace App\Controller;

use App\Entity\Images;
use App\Entity\Recettes;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Form\RecettesType;
use App\Form\SearchRecetteType;
use App\Repository\RecettesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RecettesController extends AbstractController
{
    /**
     * @Route("/index", name="recettes_index", methods={"GET", "POST"})
     */
    public function index(RecettesRepository $recettesRepository, Request $request): Response
    {

        $recettes = $recettesRepository->findAll(); //on affiche toutes les recettes

        $form = $this->createForm(SearchRecetteType::class);

        $search = $form->handleRequest(($request));

        if ($form->isSubmitted() && $form->isValid()) {
            //On recherche les recettes dont le titre correspond aux mots clés
            $recettes = $recettesRepository->search(
                $search->get('mot')->getData()
            );
        }

        return $this->render('recettes/index.html.twig', [
            'recettes' => $recettes,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function randomRecipe(RecettesRepository $recettesRepository)
    {
        $recette = $recettesRepository->findOneById(rand(5, 14));


        return $this->render('recettes/home.html.twig', [
            'recette' => $recette
        ]);
    }


    /**
     * @Route("/new", name="recettes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $recette = new Recettes();
        $form = $this->createForm(RecettesType::class, $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //On récupère les images transmises
            $images = $form->get('images')->getData();
            //On boucle sur les images
            foreach ($images as $image) {
                //On génère un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                //On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                //On stocke l'image dans la base de données (son nom uniquement)
                $img = new Images();
                $img->setNom($fichier);
                $recette->addImage($img);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($recette);
            $entityManager->flush();

            return $this->redirectToRoute('recettes_index');
        }

        return $this->render('recettes/new.html.twig', [
            'recette' => $recette,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="recettes_show", methods={"GET", "POST"})
     */
    public function show(Recettes $recette, Request $request, EntityManagerInterface $manager): Response
    {
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(new \DateTime())
                ->setRecette($recette);
            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('recettes_show', ['id' => $recette->getId()]);
        }

        return $this->render('recettes/show.html.twig', [
            'recette' => $recette,
            'commentForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="recettes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Recettes $recette): Response
    {
        $form = $this->createForm(RecettesType::class, $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //On récupère les images transmises
            $images = $form->get('images')->getData();
            //On boucle sur les images
            foreach ($images as $image) {
                //On génère un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                //On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                //On stocke l'image dans la base de données (son nom uniquement)
                $img = new Images();
                $img->setNom($fichier);
                $recette->addImage($img);
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recettes_index');
        }

        return $this->render('recettes/edit.html.twig', [
            'recette' => $recette,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="recettes_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Recettes $recette): Response
    {
        if ($this->isCsrfTokenValid('delete' . $recette->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($recette);
            $entityManager->flush();
        }

        return $this->redirectToRoute('recettes_index');
    }

    /**
     * @Route("/supprime/image/{id}", name="recettes_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        //On vérifie si le token est valide
        if ($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])) {
            //On récupère le nom de l'image
            $nom = $image->getNom();
            //On supprime le fichier
            unlink($this->getParameter('images_directory') . '/' . $nom);

            //On supprime l'entrée de la base
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            //On répond en json
            return new JsonResponse(['success' => 1]);
        } else {
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }
}
