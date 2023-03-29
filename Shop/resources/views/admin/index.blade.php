@extends('layout.admin.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Product</h1>
        <div class="card mb-4">
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
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                All Product
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>Category</th>
                            <th>image</th>
                            <th>price</th>
                            <th>size</th>
                            <th>color</th>
                            <th>description</th>
                            <th>status</th>
                            <th>show_hide</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>Category</th>
                            <th>image</th>
                            <th>price</th>
                            <th>size</th>
                            <th>color</th>
                            <th>description</th>
                            <th>status</th>
                            <th>show_hide</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->Categories }}</td>
                            <td><img class="img-fluid" src="{{ $product->image }}" width="50%" alt=""></td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->color }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->status }}</td>
                            <td>{{ $product->show_hide }}</td>
                            <td class="text-center">
                                <a name="" id="" class="btn btn-primary mb-2 text-center" href="/admin/product/{{ $product->id }}/edit">Edit</a>
                                <a name="" id="" class="btn btn-danger mb-2 text-center" href="/admin/product/{{ $product->id }}/delete">Detele</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
@endsection
