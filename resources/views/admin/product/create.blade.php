@extends('layouts.master')

@section('CSS')
    <style>
        .error {
            color: red;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12 col-md-8">

                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" minlength="5" maxlength="100" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0.01" max="9999.99" value="{{ old('price') }}" required>
                </div>

                <div class="form-group">
                    <label for="reference">Référence</label>
                    <input type="text" minlength="16" maxlength="16" class="form-control" id="reference" name="reference" value="{{ old('reference') }}" required>
                </div>

                <div class="form-group">
                    <label>Tailles</label> <br>
                    @error('sizes')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @foreach ($sizes as $size)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="sizes[]" id="{{ $size }}" value="{{ $size }}" @if(in_array($size, old('sizes') ?? [])) checked @endif>
                            <label class="form-check-label" for="{{ $size }}">{{ $size }}</label>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-12 col-md-4">

                <div class="form-group">
                    <label for="category_id">Catégorie</label>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <select class="custom-select" name="category_id">
                        <option selected disabled>Catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Publié</label> <br>
                    @error('published')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="published1" name="published" value="1" @if(old('published') == 1) checked @endif>
                        <label class="form-check-label" for="published1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="published0" name="published" value="0" @if(null !== old('published') && (old('published') == 0)) checked @endif>
                        <label class="form-check-label" for="published0">Non</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>En solde</label> <br>
                    @error('discount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="discount0" name="discount" value="1" @if(old('discount') == 1) checked @endif>
                        <label class="form-check-label" for="discount0">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="discount1" name="discount" value="0" @if(null !== old('discount') && (old('discount') == 0)) checked @endif>
                        <label class="form-check-label" for="discount1">Non</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="picture">Photo</label>
                    <input type="file" class="form-control-file" name="picture" id="picture">
                </div>

                <div class="form-group">
                    <label for="picture_title">Titre de la photo</label>
                    <input type="text" maxlength="100" class="form-control" id="picture_title" name="picture_title" value="{{ old('picture_title') }}">
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </div>
        </div>
    </form>
    <a href="{{ route('admin.product.index') }}">
        <button class="btn btn-secondary mt-5">
            <i class="fas fa-arrow-circle-left"></i> Retour
        </button>
    </a>
@endsection
