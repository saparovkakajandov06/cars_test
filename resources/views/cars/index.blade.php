@extends('main')
@section('title')
@section('content')

<div class="wrapper">

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="{{route('cars.index')}}"> <h1>Машины</h1> </a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{route('cars.create')}}"> <button type="button" class="btn btn-info float-right">
                    <i class="fas fa-plus"></i> Создать Машина</button> </a>
           
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Название</th>
                      <th>Модел</th>
                      <th>Год выпуска</th>
                      <th>Госномер</th>
                      <th>Цвет </th>
                      <th>Коробка передач </th>
                      <th>Цена аренды в сутки </th>
                      <th>Операция</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($cars as $car)

                    <tr>
                     <td>{{ $car->id }}</td>
                     <td>{{ $car->name }}</td>
                     <td>{{ $car->model_id }}</td>
                     <td>{{ $car->leave_year }}</td>
                     <td>{{ $car->gov_number }}</td>
                     <td>{{ $car->color }}</td>
                     <td>{{ $car->transmission }}</td>
                     <td>{{ $car->cost_rent_for_day }}</td>
                     <td>{{ $car->image }}</td>
                      <td>
                       
                      <a href="{{ route('cars.show', $car->id) }}"> 
                        <button type="button" class="btn btn-outline-primary btn-flat">Подробнее
                        </button>
                     </a>
                               
                            <a href="{{ route('cars.edit', $car->id) }}">
                                <button type="button" class="btn btn-outline-warning btn-flat">Изменить Моделу</button>
                            </a>
                                <form action="{{ route('cars.destroy',$car->id) }}" class="delete-product-form" method="post" enctype="multipart/form-data" style="display:inline-block">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                   
                                                    <button type="button" class="btn btn-outline-danger btn-flat" onclick="confirm('Вы хотите удалить?') ? this.parentElement.submit() : ''">Удалить</button>
                                                </form>

                                
                       
                      </td>
                  
                    </tr>

                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              {{ $cars->links() }}
              </div>
            </div>
            <!-- /.card -->

          </div>
    
        </div>
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


</div>




@endsection