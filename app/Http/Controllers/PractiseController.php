<?php

namespace App\Http\Controllers;

use App\Models\practise;
use Illuminate\Http\Request;

class PractiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i =1;
        // $practise = practise::latest()->paginate(5);
        $practise = practise::all();
        return view('practise.view', compact('practise','i')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('practise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            
        ]);
      
        practise::create($request->all());
       
        return redirect()->route('practise.index')
                        ->with('success','Form created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\practise  $practise
     * @return \Illuminate\Http\Response
     */
    public function show(practise $practise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\practise  $practise
     * @return \Illuminate\Http\Response
     */
    public function edit(practise $practise)
    {
        $a = 'abc';
        return view('practise.edit',compact('practise','a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\practise  $practise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, practise $practise)
    {
        {
            $request->validate([
                'name' => 'required',
                
            ]);
          
            $practise->update($request->all());
          
            return redirect()->route('practise.index')
                            ->with('success','Form updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\practise  $practise
     * @return \Illuminate\Http\Response
     */
    public function destroy(practise $practise)
    {
        $practise->delete();
       
        return redirect()->route('practise.index')
                        ->with('success','Items deleted successfully');
    }
}
