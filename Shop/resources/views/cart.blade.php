@extends('layout.master') @section('body')

<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        @if (session('success'))
        <div class="alert alert-success col-12">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger col-12">
            {{ session('error') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger col-12">
            <div>
                @foreach ($errors->all() as $error)
                <span class="block">{{ $error }}</span><br>
                @endforeach
            </div>
        </div>
        @endif
        <div class="col-lg-8 table-responsive mb-5">
            @if(session('cart'))
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach(session('cart') as $id => $details)
                    <tr>
                        <td class="align-middle"><img src="{{ $details['image'] }}" alt="" style="width: 50px;">{{ $details['name'] }}</td>
                        <td class="align-middle">{{number_format( $details['price'] )}}d</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <a href="/cart/decrease/{{ $details['id'] }}" type="" class="btn btn-primary btn-sm"><i class="fas fa-minus"></i></a>
                                <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="{{ $details['quantity'] }}" readonly disabled>
                                <a href="/cart/increase/{{ $details['id'] }}" type="" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                            </div>
                        </td>
                        <td class="align-middle">{{number_format( $details['price'] * $details['quantity'] )}}d</td>
                        <td class="align-middle">
                            <form action="/cart/remove/{{ $details['id'] }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="alert alert-danger">
                Your cart is empty.
            </div>
            @endif
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        @php
                        $cartController = new App\Http\Controllers\UserController;
                        @endphp
                        <h6>{{ number_format($cartController->subTotal()) }}d</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">
                            {{ ($cartController->subTotal() == 0) ? 0 : number_format(150000); }}d
                        </h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5>
                            {{ ($cartController->subTotal() == 0) ? 0 : number_format($cartController->subTotal()+150000) }}d
                        </h5>
                    </div>
                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection
