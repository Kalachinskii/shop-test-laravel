@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Цвет</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <div>
                                <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form class="pl-3" action="{{ route('color.delete', $color->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-bordered">
                            <thead>
                                <th style="width: 80px">ID</th>
                                <th>Наименование</th>
                                <th>Цвет</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $color->id }}</td>
                                    <td>{{ $color->title }}</td>
                                    {{-- <td>
                                        <div style="width:16px; height: 16px; background: {{ '#' . $color->title }};"></div>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
