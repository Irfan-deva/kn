<?php

namespace App\Http\Controllers;

use App\Models\ComputerMcq;
use App\Models\JkssbMcq;
use Illuminate\Http\Request;

class KbApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $jkssb = JkssbMcq::join(
        //     'quiz_ids',
        //     'jkssb_mcqs.quiz_id',
        //     '=',
        //     'quiz_ids.quiz_id'
        // )
        //     ->get(['jkssb_mcqs.*', 'quiz_ids.slug']);
        return response([
            'msg' => 'hello world'
        ]);
        $computer = ComputerMcq::join(
            'quiz_ids',
            'computer_mcqs.quiz_id',
            '=',
            'quiz_ids.quiz_id'
        )
            ->get(['computer_mcqs.*', 'quiz_name']);

        $jkssb = JkssbMcq::join(
            'quiz_ids',
            'jkssb_mcqs.quiz_id',
            '=',
            'quiz_ids.quiz_id'
        )
            ->get(['jkssb_mcqs.*', 'quiz_name']);


        return [
            'computer' => $computer,
            'jkssb' => $jkssb,
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
