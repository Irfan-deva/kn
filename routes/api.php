<?php

use App\Http\Controllers\ComputerMcqsController;
use App\Http\Controllers\ExamCategoryController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\JkssbController;
use App\Http\Controllers\KbApiController;
use App\Http\Controllers\QuizIdsController;
use App\Http\Controllers\SubjectController;
use App\Models\ExamCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//exam controller
Route::post('exam/new', [ExamController::class, 'store']);
Route::get('exams', [ExamController::class, 'index']);
//quiz ids controller
Route::post('quizid/new', [QuizIdsController::class, 'store']);
Route::get('quizids', [QuizIdsController::class, 'index']);
//exam category controller
Route::post('exam-category/new', [ExamCategoryController::class, 'store']);
Route::get('exam-categories', [ExamCategoryController::class, 'index']);
//computer controller
Route::post('computer/new', [ComputerMcqsController::class, 'store']);
//jkssb controller
Route::post('jkssb/new', [JkssbController::class, 'store']);
//subject controller
Route::post('subject/new', [SubjectController::class, 'store']);
Route::get('subjects', [SubjectController::class, 'index']);
//kbapi controller
Route::get('/all', [KbApiController::class, 'index']);
