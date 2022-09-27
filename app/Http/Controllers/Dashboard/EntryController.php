<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\entry\StoreService;
use App\Http\Requests\entry\StoreRequest;
use Auth;

use App\Models\Entry;
use App\Models\Category;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_id)
    {
        $data = Auth::User()->GetEntries->WHERE('category_id', $category_id);
        $data = Entry::WHERE('user_id', Auth::User()->id)->WHERE('category_id', $category_id)->get();
        return view('dashboard.entry.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category_id)
    {
        $data = Category::WHERE('id', $id)->first();
        if($data != null)
        {
            if($data->user_id == Auth::User()->id || $data->user_id == '')
            {
                return view('dashboard.entry.create')->with('data', $data);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, StoreService $storeService)
    {
        $data = $request->all();
        if($storeService->handle($data))
        {
            return redirect()->back()->with('Success', 'Dodano wpis');
        }else{
            return redirect('/dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
