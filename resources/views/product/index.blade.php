@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Продукты</h1>
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
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Добавить</a>
                    </div>
                </div>
                <!-- /.card-header -->
                {{-- <div class="card-body table-responsive p-0"> --}}
                {{-- <table class="table table-bordered">
                        <thead>
                            <th style="width: 80px">ID</th>
                            <th>Наименование</th>
                            <th>content</th>
                            <th>description</th>
                            <th>preview_image</th>
                            <th>price</th>
                            <th>count</th>
                            <th>is_published</th>
                            <th>category_id</th>
                            <th>tags</th>
                            <th>colors</th>

                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        
                                            {{ $product->title }}
                                        
                                    </td>
                                    <td>{{ $product->content }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->preview_image }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->count }}</td>
                                    <td>{{ $product->is_published }}</td>
                                    <td>{{ $product->category->title }}</td>
                                    <td>
                                        @foreach ($tags as $tag)
                                            {{ $tag->title }} <br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($colors as $color)
                                            {{ $color->title }} <br>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                @foreach ($products as $product)
                    <a href="{{ route('product.show', $product->id) }}">
                        <div class="card card-solid">
                            <div class="card-body pb-0">
                                <div class="row d-flex align-items-stretch">
                                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                        <div class="card bg-light">
                                            <div class="card-header text-muted border-bottom-0">
                                                <h3>{{ $product->title }}</h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p>{{ $product->content }}</p>
                                                        <p>{{ $product->description }}</p>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        <img src="{{ asset('storage/' . $product->preview_image) }}"
                                                            alt="" class="img-circle img-fluid">
                                                        <p>Категория: {{ $product->category->title }}</p>
                                                        <p>Размеры:
                                                            @foreach ($tags as $tag)
                                                                {{ $tag->title . ',' }}
                                                            @endforeach
                                                        </p>
                                                        <p>
                                                            Цвета:
                                                            @foreach ($colors as $color)
                                                                <label
                                                                    style="width:16px; height: 16px; background: {{ '#' . $color->title }};">
                                                                </label>
                                                            @endforeach
                                                        </p>
                                                        <span>Цена: {{ $product->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


                {{-- </div> --}}
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
