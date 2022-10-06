<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Brand;
use Session;

class ModelController extends Controller
{
        
        public function index()
        {
            $search = \Request::get('search');
            if(is_null($search)){
                $models = Models::orderBy('id', 'asc')->paginate(10); 
            }
            else{
               $models = Models::where('name', 'like', '%'.$search.'%')->paginate(5); 
            }
    
            return view('models.index', compact('models'));
        }
    
    
        public function create()
        {
            $brands = Brand::all();
            return view('models.create')->with([
                'brands' => $brands,
            ]);
        }
    
    
        public function store(Request $request)
        {
            //Regex to accept only letters, hyphens and whitespaces
            $data = [
                'name' => 'required|max:20|regex:/^[a-zA-Z0-9\s-]+$/u'
            ];
    
            $this->validate($request, $data);
    
            $models = new Models;
            $models->name = $request->name;
            $models->brand_id = $request->brand_id;
            $models->save();
    
            //Display a flash message on succesfull submit
            Session::flash('success', 'Успешно Добавлено');
    
            //Redirect to another page
            return redirect()->route('models.index');
    
        }
    
        public function show($id)
        {
            $model = Models::find($id);
            return view('models.show', compact('model'));
        }
    
        public function edit($id)
        {
            $model = Models::find($id);
            $brands = Brand::all();
            return view('models.edit', compact('model','brands'));
        }
    
    
        public function update(Request $request, $id)
        {
            $models = Models::find($id);
    
            //Regex to accept only letters, hyphens and whitespaces
            $data = [
                'name' => 'required|max:20|regex:/^[a-zA-Z0-9\s-]/u'
            ];
    
            $this->validate($request, $data);
    
            $models->name = $request->input('name');
            $models->brand_id = $request->input('brand_id');
            $models->save();
    
            Session::flash('success', 'Успешно изменено.'.' '.$models->id.'');
    
            return redirect()->route('models.index');
        }
    
    
    
        public function destroy($id)
        {
            $models = Models::find($id);
            $models->delete();
    
            Session::flash('success', 'Удалено.'.' '.$models->id.' ');
    
            return redirect()->route('models.index');
        }
    
    



}
