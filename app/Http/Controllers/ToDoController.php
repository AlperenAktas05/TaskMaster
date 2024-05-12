<?php

namespace App\Http\Controllers;

use App\Models\ToDoTask;
use App\Models\ToDoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function Laravel\Prompts\password;

class ToDoController extends Controller
{
    public function indexPage()
    {
        return view("ToDoViews.index");
    }

    public function loginPage()
    {
        return view("ToDoViews.login");
    }

    public function submitLogin(Request $request)
    {
        $toDoUsers = ToDoUser::query()->get();

        foreach ($toDoUsers as $item){
            if($item->email == $request -> input("email") && $item->password == $request -> input("password")){
                session()->put("id", $item->id);
                session()->put("name", $item->name);
                session()->put("surname", $item->surname);
                session()->put("email", $item->email);
                session()->put("password", $item->password);
                return $this->profilePage();
            }
        }

        return redirect()->back();
    }

    public function registerPage()
    {
        return view("ToDoViews.register");
    }

    public function submitRegister(Request $request)
    {
        $toDoUser = new ToDoUser();
        $toDoUser->name = $request -> input("name");
        $toDoUser->surname = $request -> input("surname");
        $toDoUser->email = $request -> input("email");
        $toDoUser->password = $request -> input("password");
        $toDoUser->save();

        return view("ToDoViews.login");
    }

    public function addTaskPage()
    {
        $name = session("name");
        return view("ToDoViews.addTask", compact("name"));
    }

    public function submitTask(Request $request)
    {
        $toDoTask = new ToDoTask();
        $toDoUser = ToDoUser::query()->get();

        foreach ($toDoUser as $item){
            if($item->id == session("id")){
                $toDoTask->profileID = session("id");
                $toDoTask->name = session("name");
                $toDoTask->surname = session("surname");
                $toDoTask->email = session("email");
                $toDoTask->password = session("password");
                $toDoTask->taskTitle = $request -> input("taskTitle");
                $toDoTask->taskContent = $request -> input("taskContent");
                $toDoTask->taskStatus = $request -> input("taskStatus");
                $toDoTask->save();
            }
        }

        return redirect()->route("routeProfile");
    }

    public function profilePage()
    {
        $toDoTask = ToDoTask::query()->get();

        $taskArray = [];
        $taskStatus = "";

        foreach ($toDoTask as $item){
            $shortTask = Str::limit($item->taskContent, 150);

            if($item->profileID == session("id")){
                array_unshift($taskArray, '
                <div class="col-4 mt-5">
                    <div class="card border-0 rounded shadow" style="width: 18rem; height: 300px;">
                        <div class="card-body rounded p-4 d-flex flex-column" style="background-color: #F3F8FF">
                            <h3 class="card-title" style="color: #7e30e1">'.$item->taskTitle.'</h3>
                            <p class="card-text">'.$shortTask.'</p>
                           <div class="mt-auto">
                                <a href="" class="card-link text-light px-2 py-1 rounded-pill" style="background-color: #7e30e1; text-decoration: none; margin-top: 1000px;">'.$item->taskStatus.'</a>
                                <a href="task/'.$item->id.'" class="card-link text-light px-2 py-1 rounded-pill" style="background-color: #7e30e1; text-decoration: none; margin-top: 1000px;">Göreve Git</a>
                            </div>
                        </div>
                    </div>
                </div>
                ');

                $taskStatus = $item->taskStatus;
            }
        }

        $name = session("name");
        return view("ToDoViews.profile", compact("name", "taskArray", "taskStatus"));
    }

    public function taskPage(string $id)
    {
        $name = session("name");

        $toDoTask = ToDoTask::query()->get();
        $toDoID = ToDoTask::query()->where('id', $id)->first();

        return view("ToDoViews.task", compact("name", "toDoTask","id"));
    }

    public function updateTask(Request $request, string $id)
    {
        $toDoTask = ToDoTask::query()->get();
        $toDoID = ToDoTask::query()->find($id);

        if ($toDoID){
            if($request->input("action") == "update"){
                if($request -> input("taskTitle") != null){
                    $toDoID->taskTitle = $request -> input("taskTitle");
                }
                if($request -> input("taskContent") != null){
                    $toDoID->taskContent = $request -> input("taskContent");
                }
                if($request -> input("taskStatus") != null){
                    $toDoID->taskStatus = $request -> input("taskStatus");
                }
                $toDoID->save();
            }
            if ($request->input("action") == "delete"){
                $toDoID->delete();
            }
        }

        return redirect()->route("routeProfile");
    }

    public function settingsPage()
    {
        $name = session("name");
        $surname = session("surname");
        $email = session("email");
        $password = session("password");
        $hiddenPassword = "";

        for ($i = 0; $i < strlen($password); $i++){
            $hiddenPassword = $hiddenPassword . "*";
        }

        return view("ToDoViews.settings", compact("name","surname","email","hiddenPassword"));
    }

    public function updateSettingsPage()
    {
        $name = session("name");
        $surname = session("surname");
        $email = session("email");
        $password = session("password");

        return view("ToDoViews.updateSettings", compact("name", "surname","email","password"));
    }

    public function updateSettings(Request $request)
    {
        $toDoUser = ToDoUser::query()->get();
        $toDoTask = ToDoTask::query()->get();

        foreach ($toDoUser as $item){
            if($item->id == session("id")){
                $item->name = $request -> input("name");
                session()->put("name", $request->input("name"));

                $item->surname = $request -> input("surname");
                session()->put("surname", $request->input("surname"));

                $item->email = $request -> input("email");
                session()->put("email", $request->input("email"));

                $item->password = $request -> input("password");
                session()->put("password", $request->input("password"));

                $item->save();
            }
        }

        foreach ($toDoTask as $item){
            if($item->profileID == session("id")){
                $item->name = $request -> input("name");
                $item->surname = $request -> input("surname");
                $item->email = $request -> input("email");
                $item->password = $request -> input("password");

                $item->save();
            }
        }

        return redirect()->route("routeLogin");
    }
}
