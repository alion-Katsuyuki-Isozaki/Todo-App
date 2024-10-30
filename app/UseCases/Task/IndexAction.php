<?php
namespace App\UseCases\Task;

use App\Models\Task;

class IndexAction
{
    public function __invoke($request)
    {
        $displayAll = $request->display_all;

        // if(isset($displayAll) || $displayAll == 'show'){*/
            $tasks = Task::all();
        /*}else{
            $tasks = Task::where('status', false)->get();
        }*/

        return[
            'tasks' => $tasks,
            'displayAll' => $displayAll
        ];
    }
}
