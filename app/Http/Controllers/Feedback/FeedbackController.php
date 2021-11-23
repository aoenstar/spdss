<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Http\Requests\Feedback\FeedbackCreateRequest;
use Illuminate\Support\Facades\Auth;


class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if($user->role == "SPDSSAdministrator")
        {
            $entry = feedback::all();
        }
        else
        {
            $entry = Feedback::all()->where('type', '=', 'testimonial');
        }

        //$entry = Feedback::all();
        return view('feedback/index')->with('feedback', $entry);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feedback = new Feedback;
        return view('feedback/create')->with('feedback', $feedback);
    }
    public function create2()
    {
        $feedback = new Feedback;
        return view('feedback/create2')->with('feedback', $feedback);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackCreateRequest $request)
    {
            Feedback::create([
                'type' =>$request->type,
              'testimonial' => $request->testimonial,
      ]);
    return redirect(url('testimonials'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $entry = Feedback::findOrFail($id);
        return view('testimonials')->with('entry', $entry);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = Feedback::findOrFail($id);
        $entry->delete();
        return redirect()->back();
    }
}
