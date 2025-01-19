<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AthleteFormRequest;
use App\Models\Athlete;


class AthleteController extends Controller
{

        public function index()

        {
                $students = Student::all();
        return view('student.index', compact('students'));

        }

    public function create()
    {
            return view('athlete.create');
    }



    public function store(AthleteFormRequest $request)
    {
            $data = $request->validated();

            $athlete = Athlete::create($data);
            return redirect('/dashboard')->with('message', 'Student Add Successfully');
    }

    

    public function edit($student_id)
    {
        $student = Student::find($student_id);


            return view('student.edit', compact('student'));

    }

    public function update(StudentFormRequest $request, $student_id)
    {
        $data = $request->validated();

                $student = Student::where('id', $student_id)->update([
                        'name' => $data['name'],
                        'address' => $data['address'],
                        'mobile' => $data['mobile']
                    ]);
                    
        return redirect('/students')->with('message', 'Student Updated Successfully');

    }

    public function card()

    {
            $students = Student::all();
    return view('student.card', compact('students'));

    }


    public function register(Request $request)
    {
        // Handle registration logic here
    }


    public function showForm()
    {
        return view('athlete.reg'); // Adjust 'athlete.register' to the actual view path
    }
}

