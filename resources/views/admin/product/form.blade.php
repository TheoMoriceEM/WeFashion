@extends('layouts.master')

@section('content')
    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-8">

                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" maxlength="100" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0.01" max="9999.99">
                </div>

                <div class="form-group">
                    <label for="reference">Référence</label>
                    <input type="text" minlength="16" maxlength="16" class="form-control" id="reference" name="reference">
                </div>

                <div class="form-group">
                    <label>Tailles</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="XS" value="XS">
                        <label class="form-check-label" for="XS" name="sizes">XS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="S" value="S">
                        <label class="form-check-label" for="S" name="sizes">S</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="M" value="M">
                        <label class="form-check-label" for="M" name="sizes">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="L" value="L">
                        <label class="form-check-label" for="L" name="sizes">L</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="XL" value="XL">
                        <label class="form-check-label" for="XL" name="sizes">XL</label>
                    </div>
                </div>

            </div>
            <div class="col-4">

                <div class="form-group">
                    <label for="category_id">Catégorie</label>
                    <select class="custom-select" name="category_id">
                        <option selected disabled>Catégorie</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Publié</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="published1" name="published" value="1">
                        <label class="form-check-label" for="published1">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="published0" name="published" value="0">
                        <label class="form-check-label" for="published0">Non</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>En solde</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="discount0" name="discount" value="1">
                        <label class="form-check-label" for="discount0">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="discount1" name="discount" value="0">
                        <label class="form-check-label" for="discount1">Non</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="picture">Photo</label>
                    <input type="file" class="form-control-file" name="picture" id="picture">
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </div>
        </div>
    </form>
@endsection
