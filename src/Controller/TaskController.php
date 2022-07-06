<?php

namespace App\Controller;
use App\Entity\Task;
use App\Entity\Information;
use App\Repository\InformationRepository;
use App\Repository\TaskRepository;

use App\Form\TaskType;
use App\Form\InformationType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class TaskController extends AbstractController
{
  private $taskRepository;
  private $informationRepository;

//  public function __construct(InformationRepository $informationRepository)
//   {
// $this->informationRepository=$informationRepository;


//   }
//   public function __construct(TaskRepository $taskRepository)
//   {
// $this->taskRepository=$taskRepository;


//   }

  /**
    * @Route("/")
   */
  //  public function index()
  //   {
      
  //     $tasks =$this->taskRepository->findAll();
  //      return $this->render('home.html.twig',["tasks"=>$tasks]);
  //   }

  /**
    * @Route("/list")
   */
    public function list(ResumeRepository $resumeRepository)
    {
      
      $resumes =$this->$resumeRepository->findAll();
       return $this->render('list.html.twig',["resume"=>$resumes]);
    }

/**
*@Route("/create/information",name="info_create")
**/
    public function createtask(Request $request):Response
    {


        $info = new Information();
        // ...

        $form = $this->createForm(InformationType::class, $info);
        $form->handleRequest($request);
     //   $task = $form->getData();
//dd($task);

       if($form->isSubmitted()&& $form->isValid())
        {
            $info = $form->getData();
            $entityManager =$this->getDoctrine()->getManager();
            $entityManager->persist($info);
            $entityManager->flush();
            return $this->redirectToRoute('info_create');
          //  dd($task);
        }
       return $this->renderForm('information.html.twig', [
            'form' => $form,
        ]);
    

   } 
      /**
    
    * @Route("/task",name="view_task")
   */
    public function tasks()
    {
      
      $tasks =$this->taskRepository->findAll();
       return $this->render('home.html.twig',["tasks"=>$tasks]);
    }
    /**
    * @Route("/task/{id}")
   */
     public function showTask($id)
    {
       # $number = random_int(0, 100);

         $task = $this->taskRepository->find($id);
       return $this->render('home.html.twig',["task"=>$task]);
    }
}