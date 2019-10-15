@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">All Products</div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Product #</th>
                        <th>Product SKU</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Tax</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allProducts as $product)
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $product->product_sku }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_desc }}</td>
                            <td>{{ $product->product_tax }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                                <a href="/delete/products-master/{{ $product->product_id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
