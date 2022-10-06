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
          <a href="{{route('brands.index')}}"> <h1>Назад</h1> </a>
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
            
            <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                <div class="card-body">
                  
                <div class="form-group">
                    <label for="exampleInputEmail1">Название Бренда</label>
                    <input type="text" class="form-control" name="name" value="{{$brand->name}}" placeholder="Вводите название Бренда">
                  </div>
               
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