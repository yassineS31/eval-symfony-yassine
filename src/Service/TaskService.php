<?php
namespace App\Service;
use App\Repository\TaskRepository;
use PhpParser\Node\Stmt\TryCatch;
use function PHPUnit\Framework\throwException;
class TaskService{

    // Ajout d'une tache
        public function addTask(TaskRepository $taskRepository){ 
            try{
                return $this->render('addtask.html.twig', [
                'task' => $taskRepository->findOneBy($id)
                ]);
        } catch(\Throwable $error){
            'error lors de la saisi de la tache.';
        }
    }

    

//Afficher toutes les taches
public function GetAllTasks(){
    try {
        return $this->render('alltasks.html.twig', [
            'tasks' => $taskRepository->findAll($id)
        ]);
    } catch (\Throwable $error) {
        'error bdd';
    }
}
}