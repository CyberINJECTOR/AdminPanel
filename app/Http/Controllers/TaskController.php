<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use SebastianBergmann\Environment\Console;

class TaskController extends Controller
{
    public function getAllTasks() {
        $Tasks = Task::all();
        return $Tasks;
    }

    public function insertTask(Request $request) {
        $newTask = Task::create($request->all());
        print($newTask);
        return $newTask;
    }
}
