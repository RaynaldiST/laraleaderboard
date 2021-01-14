<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            ["id" => "1", "first_name" => "Michael", "last_name" => "Brown", "email" => "michael@mailer.com", "phone_number" => "+6119383999", "distance" => "50", "seconds" => "10", "minutes" => "40", "hours" => "4", "ranking" => "1"],
            ["id" => "2", "first_name" => "Marsha", "last_name" => "Yellow", "email" => "marsha@mailer.com", "phone_number" => "+61193808888", "distance" => "50", "seconds" => "10", "minutes" => "40", "hours" => "6", "ranking" => "2"],
            ["id" => "3", "first_name" => "Pinkan", "last_name" => "blue", "email" => "pinkan@mailer.com", "phone_number" => "+611938875666", "distance" => "50", "seconds" => "10", "minutes" => "40", "hours" => "9", "ranking" => "4"],
            ["id" => "4", "first_name" => "Marsha", "last_name" => "Yellow", "email" => "marsha@mailer.com", "phone_number" => "+61193808888", "distance" => "50", "seconds" => "10", "minutes" => "40", "hours" => "12", "ranking" => "5"],
            ["id" => "5", "first_name" => "Aurum", "last_name" => "Yellow", "email" => "marsha@mailer.com", "phone_number" => "+61193808888", "distance" => "50", "seconds" => "10", "minutes" => "40", "hours" => "18", "ranking" => "6"]
        ];

        return view("welcome", ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
