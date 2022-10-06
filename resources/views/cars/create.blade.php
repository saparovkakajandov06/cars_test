@extends('main')
@section('title') 
@section('content')

<div class="wrapper">
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="{{route('cars.index')}}"> <h1>Назад</h1> </a>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
           
            <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  
                <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" class="form-control" name="name" placeholder="Вводите название">
                  </div>


              <div class="form-group">
                <label for="model_id">Выбрать Модель</label>
                <select name="model_id" id="model_id" class="form-control custom-select">
                  @foreach($models as $model)
                                <option value="{{ $model->id }}"
                                 >{{ $model->name }}</option>    
                            @endforeach

                        
                		</select>
                </select>
              </div>


              <div class="form-group">
                    <label for="exampleInputEmail1">Год выпуска</label>
                    <input type="text" class="form-control" name="leave_year" placeholder="Год выпуска">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Госномер</label>
                    <input type="text" class="form-control" name="gov_number" placeholder="Госномер">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Цвет</label>
                    <input type="text" class="form-control" name="color" placeholder="Цвет">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Коробка передач </label>
                    <input type="text" class="form-control" name="transmission" placeholder="Коробка передач">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Цена аренды в сутки </label>
                    <input type="text" class="form-control" name="cost_rent_for_day" placeholder="Цена аренды в сутки">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Фото </label>
                    <input type="file" class="form-control" name="image">
                  </div>
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
              </form>
            </div>
      
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>




@endsection