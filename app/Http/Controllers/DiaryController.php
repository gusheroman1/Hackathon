<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diaries = Diary::all()->toArray();
        return view('diary.index', compact('diaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diary.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'number'    =>  'required',
            'date'     =>  'required',
            'diaryname'    =>  'required',
            'content'    =>  'required'


        ]);
        $diary = new Diary([
            'number'    =>  $request->get('number'),
            'date'     =>  $request->get('date'),
            'diaryname'    =>  $request->get('diaryname'),
            'content'    =>  $request->get('content')

        ]);
        $diary->save();
        return redirect()->route('diary.index')->with('success', 'Data Added');
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
        $diary = Diary::find($id);
        return view('diary.edit', compact('diary', 'id'));
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
        $this->validate($request, [
            'number'    =>  'required',
            'date'     =>  'required',
            'diaryname'    =>  'required',
            'content'    =>  'required'

        ]);
        $diary = Diary::find($id);
        $diary->number = $request->get('number');
        $diary->date = $request->get('date');
        $diary->diaryname = $request->get('diaryname');
        $diary->content = $request->get('content');

        $diary->save();
        return redirect()->route('diary.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diary = Diary::find($id);
        $diary->delete();
        return redirect()->route('diary.index')->with('success', 'Data Deleted');
    }
}
