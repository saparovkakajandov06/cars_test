<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marka;
use Session;

class MarkaController extends Controller
{
    public function index()
    {
        $search = \Request::get('search');
        if(is_null($search)){
            $markas = Marka::orderBy('id', 'asc')->paginate(10); 
        }
        else{
           $markas = Marka::where('name', 'like', '%'.$search.'%')->paginate(5); 
        }

        return view('markas.index', compact('markas'));
    }


    public function create()
    {
        return view('markas.create');
    }


    public function store(Request $request)
    {
        //Regex to accept only letters, hyphens and whitespaces
        $data = [
            'name' => 'required|max:20|regex:/^[a-zA-Z0-9\s-]+$/u'
        ];

        $this->validate($request, $data);

        $marka = new Marka;
        $marka->name = $request->name;
        $marka->save();

        //Display a flash message on succesfull submit
        Session::flash('success', 'Успешно Добавлено');

        //Redirect to another page
        return redirect()->route('markas.index');

    }

    public function show($id)
    {
        $marka = Marka::find($id);
        return view('markas.show', compact('marka'));
    }

    public function edit($id)
    {
        $marka = Marka::find($id);
        return view('markas.edit', compact('marka'));
    }


    public function update(Request $request, $id)
    {
        $marka = Marka::find($id);

        $data = [
            'name' => 'required|max:20|regex:/^[a-zA-Z0-9\s-]/u'
        ];

        $this->validate($request, $data);

        $marka->name = $request->input('name');
        $marka->save();

        Session::flash('success', 'Успешно изменено.'.' '.$marka->id.'');

        return redirect()->route('markas.index');
    }



    public function destroy($id)
    {
        $marka = Marka::find($id);
        $marka->delete();

        Session::flash('success', 'Удалено.'.' '.$marka->id.' ');

        return redirect()->route('markas.index');
    }

}
