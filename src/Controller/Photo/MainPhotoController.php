<?php


namespace App\Controller\Photo;
use App\Repository\JobRepository;
use ContainerPhIcilj\getJobRepositoryService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainPhotoController extends AbstractController
{
    /**
     * @Route("/photo", name="home_photo")
     */
    public function home()
    {

//        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('photo/base.html.twig', [
//            'categories' => $categories,
        ]);
    }
}