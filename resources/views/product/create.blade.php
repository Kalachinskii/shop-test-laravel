@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Добавить продукт</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row-12">
                <form action="{{ route('product.store') }}" method="POST" class="d-flex flex-column"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- Title --}}
                    <div class="form-grup col-6">
                        <input type="text" name="title" class="form-control" placeholder="Наименование">
                    </div>
                    <br>
                    {{-- Description --}}
                    <div class="form-grup col-6">
                        <input type="text" name="description" class="form-control" placeholder="Описание">
                    </div>
                    <br>
                    {{-- Price --}}
                    <div class="form-grup col-6">
                        <textarea name="content" class="form-control" placeholder="Контент"></textarea>
                    </div>
                    <br>
                    {{-- Price --}}
                    <div class="form-grup col-6">
                        <input type="text" name="price" class="form-control" placeholder="Цена">
                    </div>
                    <br>
                    {{-- Count --}}
                    <div class="form-grup col-6">
                        <input type="text" name="count" class="form-control" placeholder="Колличество">
                    </div>
                    <br>
                    {{-- Img --}}
                    <div class="form-group col-6">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Загрузка</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    {{-- Category_id --}}
                    <div class="form-group col-6">
                        <select name="category_id" class="form-control select2" style="width: 100%;">
                            <option selected="selected" disabled>Выберите категорию</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Tag --}}
                    <div class="form-group col-6">
                        <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Выберите тэг"
                            style="width: 100%;">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Color --}}
                    <div class="form-group col-6">
                        <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Выберите цвет"
                            style="width: 100%;">
                            @foreach ($colors as $color)
                                {{-- style="background: {{ '#' . $color->title }} !important;" внешний стиль перекрывает --}}
                                <option value="{{ $color->id }}">{{ $color->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- is_published --}}
                    {{-- <div class="form-grup col-6">
                        <input type="text" name="is_published" class="form-control" placeholder="Публикация продукта">
                    </div> --}}
                    <br>
                    {{-- Submit --}}
                    <div class="form-grup">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
