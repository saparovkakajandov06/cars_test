<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Models;
use Session;

class CarController extends Controller
{
        
    public function index()
    {
        $models = Models::all();
        $search = \Request::get('search');
        if(is_null($search)){
            $cars = Car::orderBy('id', 'asc')->paginate(10); 
        }
        else{
           $cars = Car::where('name', 'like', '%'.$search.'%')->paginate(5); 
        }

        return view('cars.index', compact('cars','models'));
    }


    public function create()
    {
        $models = Models::all();
        return view('cars.create', compact('models'));
    }


    public function store(Request $request)
    {
        //Regex to accept only letters, hyphens and whitespaces
        $data = [
            'name' => 'required|max:20|regex:/^[a-zA-Z0-9\s-]+$/u'
        ];

        $this->validate($request, $data);

        $cars = new Car;
        $cars->name = $request->name;
        $cars->model_id = $request->model_id;
        $cars->leave_year = $request->leave_year;
        $cars->gov_number = $request->gov_number;
        $cars->color = $request->color;
        $cars->transmission = $request->transmission;
        $cars->cost_rent_for_day = $request->cost_rent_for_day;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $cars->save();

        //Display a flash message on succesfull submit
        Session::flash('success', 'Успешно Добавлено');

        //Redirect to another page
        return redirect()->route('cars.index');

    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }


    public function update(Request $request, $id)
    {
        $cars = Car::find($id);

        //Regex to accept only letters, hyphens and whitespaces
        $data = [
            'name' => 'required|max:20|regex:/^[a-zA-Z0-9\s-]/u'
        ];

        $this->validate($request, $data);

        $cars->name = $request->input('name');
        $cars->model_id = $request->input('model_id');
        $cars->leave_year = $request->input('leave_year');
        $cars->gov_number = $request->input('gov_number');
        $cars->color = $request->input('color');
        $cars->transmission = $request->input('transmission');
        $cars->cost_rent_for_day = $request->input('cost_rent_for_day');
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $cars->save();

        Session::flash('success', 'Успешно изменено.'.' '.$cars->id.'');

        return redirect()->route('cars.index');
    }



    public function destroy($id)
    {
        $cars = Car::find($id);
        $cars->delete();

        Session::flash('success', 'Удалено.'.' '.$cars->id.' ');

        return redirect()->route('cars.index');
    }





}
