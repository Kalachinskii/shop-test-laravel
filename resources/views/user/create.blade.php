@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Добавить пользователя</h1>
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
            <!-- Small boxes (Stat box) -->
            <div class="row-12">
                <form action="{{ route('user.store') }}" method="POST" class="d-flex ">
                    @csrf
                    <div class="form-grup">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                            placeholder="Имя">
                    </div>
                    <div class="form-grup">
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                            placeholder="email">
                    </div>
                    <div class="form-grup">
                        <input type="text" name="password" value="{{ old('password') }}" class="form-control"
                            placeholder="Пароль">
                    </div>
                    <div class="form-grup">
                        <input type="text" name="password_confirmation" value="{{ old('password_confirmation') }}"
                            class="form-control" placeholder="Повторите пароль">
                    </div>
                    <div class="form-grup">
                        <input type="text" name="surname" value="{{ old('surname') }}" class="form-control"
                            placeholder="Фамилия">
                    </div>
                    <div class="form-grup">
                        <input type="text" name="patronymic" value="{{ old('patronymic') }}" class="form-control"
                            placeholder="Отчество">
                    </div>
                    <div class="form-grup">
                        <input type="text" name="age" value="{{ old('age') }}" class="form-control"
                            placeholder="Возраст">
                    </div>
                    <div class="form-grup">
                        <input type="text" name="addres" value="{{ old('addres') }}" class="form-control"
                            placeholder="Адрес">
                    </div>
                    <div class="form-grup">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{ old('gender') == 1 ? 'selected' : '' }} value="1">Мужской</option>
                            <option {{ old('gender') == 2 ? 'selected' : '' }} value="2">Женский</option>
                        </select>
                    </div>
                    <div class="form-grup">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
