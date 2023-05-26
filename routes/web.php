<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


/*
    make 1 function for show
    make 2 function for create
    make 2 function for edit
    make 1 function for delete
*/
/*
    give names..
*/


Route::get('/' , [StudentController::class , 'show'])->name('show.student');
Route::get('/create' , [StudentController::class , 'create'])->name('create.student');
Route::post('/store' , [StudentController::class , 'store'])->name('store.student');
Route::post('/edit/{id}' , [StudentController::class , 'edit'])->name('edit.student');
Route::post('/update/{id}' , [StudentController::class , 'update'])->name('update.student');
Route::post('/delete/{id}' , [StudentController::class , 'destroy'])->name('delete.student');





//Make Crud method (rest)







