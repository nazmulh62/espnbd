@extends('admin.master')
@section('title')
    ESPNBD | Product Add
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="panel panel-heading text text-center">Add Product Form</div>

                        <div class="panel-body">
                            <br/>
                           {{ Session::get('message')}}
                            <form action="{{url('/product/new')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="CategoryInputName">Category Name</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($publushedCategories as $publushedCategory)
                                            <option value="{{ $publushedCategory->id }}">{{ $publushedCategory->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="productNameInputField">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="productInputField" placeholder="Product Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="productPriceInputField">Product Price</label>
                                    <input type="text" name="product_price" class="form-control" id="productPriceInputField" placeholder="Product Price Here">
                                </div>
                                <div class="form-group">
                                    <label for="producCodetInputField">Product Code</label>
                                    <input type="text" name="product_code" class="form-control" id="producCodetInputField" placeholder="Product Code Here">
                                </div>
                                <div class="form-group">
                                    <label for="producDescriptionInputField">Product Description</label>
                                    <textarea class="form-control" name="product_description" rows="5" placeholder="product Description Here"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="producImageInputField">Product Image</label>
                                    <input type="file" name="product_image" accept="image/*" id="ImageInputFile">
                                </div>
                                <div class="form-group">
                                    <label for="producPublicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Save Product info</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection