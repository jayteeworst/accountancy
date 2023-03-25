@extends('layouts.app')
@section('content')
<div class="m-auto w-4/8 py-24 text-center">
	<div>
		<div class="w-6/8 text-center pt-5 content-center">
			<h1 class="display-one mt-5 mb-10 text-3xl">Aktualizuj produkt</h1>
			<a href="/shop" class="btn btn-outline-primary">< Powrót do oferty</a>
            <div class="justify-center">
                <form id="add-frm" method="POST" action="/shop/{{ $product->id }}" class="border p-3 mt-2 w-600">
                    @csrf
                    @method('PUT')
                    <div class="control-group col-6 text-left flex justify-center">
                        <label for="slug">Slug</label>
                        <div>
                            <input type="text" id="slug" class="form-control mb-4 mt-4 border-2" name="slug"
                                value="{{ $product->slug }}" required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left flex justify-center">
                        <label for="name">Nazwa</label>
                        <div>
                            <input type="text" id="name" class="form-control mb-4 mt-4 border-2" name="name"
                                value="{{ $product->name }}" required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left mt-2 flex justify-center">
                        <label for="description">Opis</label>
                        <div>
                            <input id="description" class="form-control mb-4 mt-4 border-2" name="description"
                                value="{{ $product->description }}" rows="" required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left mt-2 flex justify-center">
                        <label for="body">Price</label>
                        <div>
                            <input type="text" id="price" class="form-control mb-4 mt-4 border-2" name="price"
                                value="{{ $product->price }}" required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left flex justify-center">
                        <label for="available">Dostępność</label>
                        <div>
                            <input type="text" id="available" class="form-control mb-4 mt-4 border-2" name="available"
                                value="{{ $product->available }}" required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left flex justify-center">
                        <label for="image_path">Link do obrazka</label>
                        <div>
                            <input type="text" id="image_path" class="form-control mb-4 mt-4 border-2" name="image_path"
                                value="{{ $product->image_path }}" required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left mt-2 flex justify-center"><button class="btn btn-primary px-5 py-2 rounded-full w-150 bg-green-500">Zastosuj</button></div>
                </form>
            </div>
		</div>
	</div>
</div>
@endsection