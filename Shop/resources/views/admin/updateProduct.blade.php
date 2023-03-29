@extends('layout.admin.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Product</h1>
        <div class="card mb-4">
            <form action="/admin/product/{{ $product->id }}" method="POST">
                @csrf
                @method('PUT')
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <div>
                        @foreach ($errors->all() as $error)
                        <span class="block">{{ $error }}</span><br>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="form-check mb-3">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name" value="{{ $product->name }}" required>
                </div>

                <div class="form-check mb-3">
                    <label for="Categories">Categories:</label>
                    <input class="form-control" type="text" name="Categories" value="{{ $product->Categories }}" required>
                </div>

                <div class="form-check mb-3">
                    <label for="image">Image:</label>
                    <input class="form-control" type="text" name="image" value="{{ $product->image }}" required>
                </div>

                <div class="form-check mb-3">
                    <label for="price">Price:</label>
                    <input class="form-control" type="text" name="price" value="{{ $product->price }}" required>
                </div>

                <div class="form-check mb-3">
                    <label for="size">Size:</label>
                    <input class="form-control" type="text" name="size" value="{{ $product->size }}" required>
                </div>
                <div class="form-check mb-3">
                    <label for="color">Color:</label>
                    <input class="form-control" type="text" name="color" value="{{ $product->color }}" required>
                </div>

                <div class="form-check mb-3">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="description" rows="5" required>{{ $product->description }}</textarea>
                </div>

                <div class="form-check mb-3">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="available" <?php if( $product->status == 'available' ) echo 'selected'?>>Available</option>
                        <option value="out of stock" <?php if( $product->status == 'out of stock' ) echo 'selected'?>>Out of stock</option>
                    </select>
                </div>

                <div class="form-check mb-3">
                    <label for="show_hide">Show/Hide:</label>
                    <select name="show_hide" id="show_hide" class="form-control">
                        <option value="1" <?php if ($product->show_hide == 1) echo 'selected';?>>Show</option>
                        <option value="0" <?php if ($product->show_hide == 0) echo 'selected';?>>Hide</option>
                    </select>
                </div>

                <button type="submit">Update Product</button>
            </form>

        </div>
    </div>

</main>
@endsection
