<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TaskRepository;
use App\Entity\Task;
use App\Form\TaskServiceType;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\TaskService;

final class TaskController extends AbstractController

{
    public function __construct(
        private readonly TaskService $taskService
    ){}

    #[Route('/task', name: 'app_task')]
    public function addTask( TaskService $taskService ):Response{
        
    }
    public function index(): Response
    {
        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }
}
