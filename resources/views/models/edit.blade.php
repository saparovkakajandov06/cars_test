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
          <a href="{{route('models.index')}}"> <h1>Назад</h1> </a>
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
            
            <form action="{{ route('models.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                <div class="card-body">
                  
                <div class="form-group">
                    <label for="exampleInputEmail1">Название Модела</label>
                    <input type="text" class="form-control" name="name" value="{{$model->name}}" placeholder="Вводите название Модела">
                  </div>
               
                </div>

                <div class="form-group">
                <label for="brand_id">Выбрать Бренда</label>
                <select name="brand_id" id="brand_id" class="form-control custom-select">
                  @foreach($brands as $brand)
                                <option value="{{ $brand->id }}"
                                 >{{ $brand->name }}</option>    
                            @endforeach

                        
                		</select>
                </select>
              </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Изменить</button>
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