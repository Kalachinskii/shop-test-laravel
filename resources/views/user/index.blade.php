@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Пользователи</h1>
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
    <section class="content ">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">Добавить</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered">
                        <thead>
                            <th style="width: 80px">ID</th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Отчество</th>
                            <th>Email</th>
                            <th>Возраст</th>
                            <th>Пол</th>
                            <th>Адресс</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $user->id) }}">
                                            {{ $user->name }}
                                        </a>
                                    </td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->patronymic }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->age }}</td>
                                    {{-- <td>{{ $user->gender }}</td> --}}
                                    {{-- get / atribute отпадают --}}
                                    <td>{{ $user->genderTitle }}</td>
                                    <td>{{ $user->addres }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
