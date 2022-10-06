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
          <a href="{{route('brands.index')}}"> <h1>Бренды</h1> </a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{route('brands.create')}}"> <button type="button" class="btn btn-info float-right">
                    <i class="fas fa-plus"></i> Создать Бренда</button> </a>
           
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
                      <th>Операция</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($brands as $brand)

                    <tr>
                     <td>{{ $brand->id }}</td>
                     <td>{{ $brand->name }}</td>
                      <td>
                       
                      <a href="{{ route('brands.show', $brand->id) }}"> 
                        <button type="button" class="btn btn-outline-primary btn-flat">Подробнее
                        </button>
                     </a>
                               
                            <a href="{{ route('brands.edit', $brand->id) }}">
                                <button type="button" class="btn btn-outline-warning btn-flat">Изменить Марку</button>
                            </a>
                                <form action="{{ route('brands.destroy',$brand->id) }}" class="delete-product-form" method="post" enctype="multipart/form-data" style="display:inline-block">
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
              {{ $brands->links() }}
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