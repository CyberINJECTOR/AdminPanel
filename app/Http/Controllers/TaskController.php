<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use SebastianBergmann\Environment\Console;
use PhpParser\Node\Param;

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

    public function updateTask(Request $request) {
        $oldTask = Task::find($request->input('id'));
        $oldTask->entity = $request->input('entity');
        $oldTask->id = $request->input('id');
        $oldTask->value = $request->input('value');
        $oldTask->save();
        return 'taskUpdated';
    }

    public function deleteTask(Request $request) {
        $oldTask = Task::find($request->input('id'));
        $oldTask->delete();
    }
}
