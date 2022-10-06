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
          <a href="{{route('markas.index')}}"> <h1>Марки</h1> </a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{route('markas.create')}}"> <button type="button" class="btn btn-info float-right">
                    <i class="fas fa-plus"></i> Создать Марка</button> </a>
           
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

                  @foreach($markas as $marka)

                    <tr>
                     <td>{{ $marka->id }}</td>
                     <td>{{ $marka->name }}</td>
                      <td>
                       
                      <a href="{{ route('markas.show', $marka->id) }}"> 
                        <button type="button" class="btn btn-outline-primary btn-flat">Подробнее
                        </button>
                     </a>
                               
                            <a href="{{ route('markas.edit', $marka->id) }}">
                                <button type="button" class="btn btn-outline-warning btn-flat">Изменить Марку</button>
                            </a>
                                <form action="{{ route('markas.destroy',$marka->id) }}" class="delete-product-form" method="post" enctype="multipart/form-data" style="display:inline-block">
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
              {{ $markas->links() }}
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