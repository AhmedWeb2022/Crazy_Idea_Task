<?php

namespace App\Http\Controllers;

use App\Models\Application\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    // Function to add data to course table

    public function addCourse(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->academic = $request->academic;
        $course->basic = $request->basic;
        $course->paid = $request->paid;
        $course->save();
        return response("Course was added");
    }

    // Task 2 : Solution get the record 70 from 100 records

    public function getCourse70()
    {
        $course = new Course();

        //------------------------------------------------------------------
        // ********************     Get it by id    ************************

        // $record70 = $course::select("*")->where("id", "=", 70)->get();
        //------------------------------------------------------------------
        // ******************** Get it by offset() & limit() ***************

        // $record70 = $course::select("*")->offset(69)->limit(1)->get();
        //------------------------------------------------------------------
        // Or Select the first limit 70 records then get the last of them
        // which will be 70
        //------------------------------------------------------------------

        // $allRecord70 = $course::limit(70)->get();
        // $record70 = $allRecord70[69];

        // return response($record70);
    }
}
