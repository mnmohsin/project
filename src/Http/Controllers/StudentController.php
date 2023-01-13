<?php

namespace centosquare\mohsinmemon\Http\Controllers;

use App\Http\Controllers\Controller;
use centosquare\mohsinmemon\Models\Student;
use centosquare\mohsinmemon\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('create::index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        return view('create::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreStudentRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreStudentRequest $request):RedirectResponse
    {
        try{
            $student = Student::create($request->validated());

            if($student)
            {
                return redirect()->route('index');
            }
            else{
                return back()->withError(__('message.something_went_rong'));
            }
        }
        catch(Exception $ex)
        {
            return back()->withError(__('message.something_went_rong'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Student  $student
     * @return View
     */
    public function edit($id):View
    {
        $student = Student::find($id);
        return view('create::edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateStudentRequest  $request
     * @param  Student  $student
     * @return RedirectResponse
     */
    public function update(Request $request, $id):RedirectResponse
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Student  $student
     * @return RedirectResponse
     */
    public function destroy($id):RedirectResponse
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('index');
    }
}
