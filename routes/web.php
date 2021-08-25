<?php

use App\Http\Controllers\ClassScheduleController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupMembersController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectTypeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherDegreeController;
use App\Http\Controllers\TypeOfRoomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ClassScheduleController::class, 'index']);
Route::get('/search', [ClassScheduleController::class, 'search'])->name('search');
Route::get('/searched', [ClassScheduleController::class, 'searched'])->name('searched');

Route::get('/groups', [GroupController::class, 'index'])->name('indexGroup');
Route::get('/groups/add', [GroupController::class, 'addGroup'])->name('addGroup');
Route::post('/groups/add', [GroupController::class, 'addedGroup'])->name('addedGroup');
Route::delete('/groups/delete/{id}', [GroupController::class, 'deleteGroup'])->name('deleteGroup');
Route::get('/groups/update/{id}', [GroupController::class, 'updateGroup'])->name('updateGroup');
Route::put('/groups/update/{id}', [GroupController::class, 'updatedGroup'])->name('updatedGroup');


Route::get('/degree', [TeacherDegreeController::class, 'index'])->name('indexDegree');
Route::get('/degree/add', [TeacherDegreeController::class, 'addDegree'])->name('addDegree');
Route::post('/degree/add', [TeacherDegreeController::class, 'addedDegree'])->name('addedDegree');
Route::delete('/degree/delete/{id}', [TeacherDegreeController::class, 'deleteDegree'])->name('deleteDegree');
Route::get('/degree/update/{id}', [TeacherDegreeController::class, 'updateDegree'])->name('updateDegree');
Route::put('/degree/update/{id}', [TeacherDegreeController::class, 'updatedDegree'])->name('updatedDegree');


Route::get('/teachers', [TeacherController::class, 'index'])->name('indexTeacher');
Route::get('/teachers/add', [TeacherController::class, 'addTeacher'])->name('addTeacher');
Route::post('/teachers/add', [TeacherController::class, 'addedTeacher'])->name('addedTeacher');
Route::delete('/teachers/delete/{id}', [TeacherController::class, 'deleteTeacher'])->name('deleteTeacher');
Route::get('/teachers/update/{id}', [TeacherController::class, 'updateTeacher'])->name('updateTeacher');
Route::put('/teachers/update/{id}', [TeacherController::class, 'updatedTeacher'])->name('updatedTeacher');


Route::get('/students', [GroupMembersController::class, 'index'])->name('indexStudent');
Route::get('/students/add', [GroupMembersController::class, 'addStudent'])->name('addStudent');
Route::post('/students/add', [GroupMembersController::class, 'addedStudent'])->name('addedStudent');
Route::delete('/students/delete/{id}', [GroupMembersController::class, 'deleteStudent'])->name('deleteStudent');
Route::get('/students/update/{id}', [GroupMembersController::class, 'updateStudent'])->name('updateStudent');
Route::put('/students/update/{id}', [GroupMembersController::class, 'updatedStudent'])->name('updatedStudent');


Route::get('/type-of-rooms', [TypeOfRoomController::class, 'index'])->name('indexTypeOfRoom');
Route::get('/type-of-rooms/add', [TypeOfRoomController::class, 'addTypeOfRoom'])->name('addTypeOfRoom');
Route::post('/type-of-rooms/add', [TypeOfRoomController::class, 'addedTypeOfRoom'])->name('addedTypeOfRoom');
Route::delete('/type-of-rooms/delete/{id}', [TypeOfRoomController::class, 'deleteTypeOfRoom'])->name('deleteTypeOfRoom');
Route::get('/type-of-rooms/update/{id}', [TypeOfRoomController::class, 'updateTypeOfRoom'])->name('updateTypeOfRoom');
Route::put('/type-of-rooms/update/{id}', [TypeOfRoomController::class, 'updatedTypeOfRoom'])->name('updatedTypeOfRoom');


Route::get('/rooms', [RoomController::class, 'index'])->name('indexRoom');
Route::get('/rooms/add', [RoomController::class, 'addRoom'])->name('addRoom');
Route::post('/rooms/add', [RoomController::class, 'addedRoom'])->name('addedRoom');
Route::delete('/rooms/delete/{id}', [RoomController::class, 'deleteRoom'])->name('deleteRoom');
Route::get('/rooms/update/{id}', [RoomController::class, 'updateRoom'])->name('updateRoom');
Route::put('/rooms/update/{id}', [RoomController::class, 'updatedRoom'])->name('updatedRoom');

Route::get('/subject-types',[SubjectTypeController::class, 'index'])->name('indexSubjectType');
Route::get('/subject-types/add',[SubjectTypeController::class, 'addSubjectType'])->name('addSubjectType');
Route::post('/subject-types/add',[SubjectTypeController::class, 'addedSubjectType'])->name('addedSubjectType');
Route::delete('/subject-types/delete/{id}',[SubjectTypeController::class, 'deleteSubjectType'])->name('deleteSubjectType');
Route::get('/subject-types/update/{id}',[SubjectTypeController::class, 'updateSubjectType'])->name('updateSubjectType');
Route::put('/subject-types/update/{id}',[SubjectTypeController::class, 'updatedSubjectType'])->name('updatedSubjectType');

Route::get('/subjects', [SubjectController::class, 'index'])->name('indexSubject');
Route::get('/subjects/add', [SubjectController::class, 'addSubject'])->name('addSubject');
Route::post('/subjects/add', [SubjectController::class, 'addedSubject'])->name('addedSubject');
Route::delete('/subjects/delete/{id}', [SubjectController::class, 'deleteSubject'])->name('deleteSubject');
Route::get('/subjects/update/{id}', [SubjectController::class, 'updateSubject'])->name('updateSubject');
Route::put('/subjects/update/{id}', [SubjectController::class, 'updatedSubject'])->name('updatedSubject');


Route::get('/schedules', [ClassScheduleController::class, 'index'])->name('indexSchedule');
Route::get('/schedules/add', [ClassScheduleController::class, 'addSchedule'])->name('addSchedule');
Route::post('/schedules/add', [ClassScheduleController::class, 'addedSchedule'])->name('addedSchedule');
Route::delete('/schedules/delete/{id}', [ClassScheduleController::class, 'deleteSchedule'])->name('deleteSchedule');
Route::get('/schedules/update/{id}', [ClassScheduleController::class, 'updateSchedule'])->name('updateSchedule');
Route::put('/schedules/update/{id}', [ClassScheduleController::class, 'updatedSchedule'])->name('updatedSchedule');
