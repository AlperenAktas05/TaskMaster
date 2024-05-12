<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [\App\Http\Controllers\ToDoController::class, "indexPage"]) -> name("routeIndex");

Route::get("/login", [\App\Http\Controllers\ToDoController::class, "loginPage"]) -> name("routeLogin");

Route::post("/profile", [\App\Http\Controllers\ToDoController::class, "submitLogin"]) -> name("routeSubmitLogin");

Route::get("/register", [\App\Http\Controllers\ToDoController::class, "registerPage"]) -> name("routeRegister");

Route::post("/login", [\App\Http\Controllers\ToDoController::class, "submitRegister"]) -> name("routeSubmitRegister");

Route::get("/addTask", [\App\Http\Controllers\ToDoController::class, "addTaskPage"]) -> name("routeAddTask");

Route::post("/submitTask", [\App\Http\Controllers\ToDoController::class, "submitTask"]) -> name("routeSubmitTask");

Route::get("/profile", [\App\Http\Controllers\ToDoController::class, "profilePage"]) -> name("routeProfile");

Route::get("/settings", [\App\Http\Controllers\ToDoController::class, "settingsPage"]) -> name("routeSettings");

Route::get("/task/{id}", [\App\Http\Controllers\ToDoController::class, "taskPage"]) -> name("routeTask");

Route::post("/updateTask/{id}", [\App\Http\Controllers\ToDoController::class, "updateTask"]) -> name("routeUpdateTask");

Route::get("/updateSettings", [\App\Http\Controllers\ToDoController::class, "updateSettingsPage"]) -> name("routeUpdateSettings");

Route::post("/updatedSettings", [\App\Http\Controllers\ToDoController::class, "updateSettings"]) -> name("routeUpdatedSettings");

