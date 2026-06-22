<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        
        if ($students->isEmpty()) {
            $data = [
                'message' => 'No se encontraron estudiantes',
                'status' => 200 
            ];
            return response()->json($data, 200);
        }
        
        return response()->json($students, 200);
    }

    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());

        return response()->json($student, 201);
    }

    public function show(Student $student)
    {
        return response()->json($student);
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return response()->json($student, 200);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json([
        'message' => 'Estudiante eliminado correctamente'
        ], 204);
    }
}