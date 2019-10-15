@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Product Master</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('product-store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="product-name" class="control-label">Product Name</label>
                                <input id="product-name" type="text" class="form-control" name="product-name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="product-sku" class="control-label">Product SKU</label>
                                <input id="product-sku" type="text" class="form-control" name="product-sku" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="product-desc" class="control-label">Product Description</label>
                                <input id="product-desc" type="text" class="form-control" name="product-desc">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="product-tax" class="control-label">Product Tax</label>
                                <input id="product-tax" type="number" class="form-control" name="product-tax" required>
                            </div>
                        </div>

                        <hr>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="col-md-12 btn btn-primary">
                                    Create Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
