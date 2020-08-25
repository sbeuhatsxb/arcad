<?php


namespace App\Controller;
use App\Entity\Award;
use App\Entity\Category;
use App\Entity\Education;
use App\Entity\Job;
use App\Entity\WebProject;
use App\Repository\JobRepository;
use ContainerPhIcilj\getJobRepositoryService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {

        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $awards = $this->getDoctrine()->getRepository(Award::class)->findAll();
        $educations = $this->getDoctrine()->getRepository(Education::class)->findAll();
        $webprojects = $this->getDoctrine()->getRepository(WebProject::class)->findAll();
        $jobs = $this->getDoctrine()->getRepository(Job::class)->findAll();

        return $this->render('base.html.twig', [
            'categories' => $categories,
            'awards' => $awards,
            'educations' => $educations,
            'webprojects' => $webprojects,
            'jobs' => $jobs,
        ]);
    }
}