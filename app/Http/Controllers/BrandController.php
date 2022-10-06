<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Session;

class BrandController extends Controller
{
    public function index()
    {
        $search = \Request::get('search');
        if(is_null($search)){
            $brands = Brand::orderBy('id', 'asc')->paginate(10); 
        }
        else{
           $brands = Brand::where('name', 'like', '%'.$search.'%')->paginate(5); 
        }

        return view('brands.index', compact('brands'));
    }


    public function create()
    {
        return view('brands.create');
    }


    public function store(Request $request)
    {
        //Regex to accept only letters, hyphens and whitespaces
        $data = [
            'name' => 'required|max:20|regex:/^[a-zA-Z0-9\s-]+$/u'
        ];

        $this->validate($request, $data);

        $brands = new Brand;
        $brands->name = $request->name;
        $brands->save();

        //Display a flash message on succesfull submit
        Session::flash('success', 'Успешно Добавлено');

        //Redirect to another page
        return redirect()->route('brands.index');

    }

    public function show($id)
    {
        $brand = Brand::find($id);
        return view('brands.show', compact('brand'));
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.edit', compact('brand'));
    }


    public function update(Request $request, $id)
    {
        $brands = Brand::find($id);

        //Regex to accept only letters, hyphens and whitespaces
        $data = [
            'name' => 'required|max:20|regex:/^[a-zA-Z0-9\s-]/u'
        ];

        $this->validate($request, $data);

        $brands->name = $request->input('name');
        $brands->save();

        Session::flash('success', 'Успешно изменено.'.' '.$brands->id.'');

        return redirect()->route('brands.index');
    }



    public function destroy($id)
    {
        $brands = Brand::find($id);
        $brands->delete();

        Session::flash('success', 'Удалено.'.' '.$brands->id.' ');

        return redirect()->route('brands.index');
    }

}
