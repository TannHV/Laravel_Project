@extends('layout.admin.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add Product</h1>
        <div class="card mb-4">
            <!-- resources/views/products/create.blade.php -->

            <form method="POST" action="/admin/create">
                @csrf
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
                    <label for="name">No:</label>
                    <input class="form-control" type="text" name="no" id="name" required>
                </div>
                <div class="form-check mb-3">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>

                <div class="form-check mb-3">
                    <label for="category">Category:</label>
                    <input class="form-control" type="text" name="Categories" id="category" required>
                </div>

                <div class="form-check mb-3">
                    <label for="image">Image:</label>
                    <input class="form-control" type="text" name="image" id="image" required>
                </div>

                <div class="form-check mb-3">
                    <label for="price">Price:</label>
                    <input class="form-control" type="number" name="price" id="price" required>
                </div>

                <div class="form-check mb-3">
                    <label for="size">Size:</label>
                    <input class="form-control" type="text" name="size" id="size">
                </div>

                <div class="form-check mb-3">
                    <label for="color">Color:</label>
                    <input class="form-control" type="text" name="color" id="color">
                </div>

                <div class="form-check mb-3">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="description" id="description"></textarea>
                </div>

                <div class="form-check mb-3">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="available">Available</option>
                        <option value="out of stock">Out of stock</option>
                    </select>
                </div>

                <div class="form-check mb-3">
                    <label for="show_hide">Show/Hide:</label>
                    <select name="show_hide" id="show_hide" class="form-control">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                    </select>
                </div>

                <div class="form-check mb-3">
                    <button type="submit" class="btn btn-primary w-100">Create</button>
                </div>
            </form>

        </div>
    </div>

</main>
@endsection
