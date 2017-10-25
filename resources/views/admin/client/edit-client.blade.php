@extends('admin.master')
@section('title')
    ESPNBD | Client Add
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="panel panel-heading  text text-center">Edit Client Information</div>

                        <div class="panel-body">

                            <form action="{{url('/client/update')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="clientName">Client Name</label>
                                    <input type="text" value="{{$clientById->client_name}}" name="client_name" class="form-control" id="clientNameInputField" placeholder="Client  Name Here">
                                    <input type="hidden" value="{{$clientById->id}}" name="client_id" class="form-control" id="clientNameInputField" placeholder="Client  Name Here">

                                </div>
                                <div class="form-group">
                                    <label for="clientDesignation">Clent Designation</label>
                                    <input type="text" value="{{$clientById->client_designation}}" name="client_designation" class="form-control" id="clientDesignationInputField" placeholder="Client Designation Here">
                                </div>
                                <div class="form-group">
                                    <label for="clientDescription">Client Message</label>
                                    <textarea class="form-control" name="client_message" rows="5" placeholder="Client Message Here">{{$clientById->client_message}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="clientImage">Client Image</label>
                                    <input type="file" name="client_image" accept="image/*" id="imageInputField">
                                    <img src="{{asset($clientById->client_image)}}" alt="clientImage" height="50" width="50">
                                </div>
                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Update Client info</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection