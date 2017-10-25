@extends('admin.master')
@section('title')

    ESPNBD | Notice Content View

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class=" panel-default">
                    <div class=" panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>View Client Details</h1>
                            <p>Table to display analytical data effectively</p>

                        </div>

                    </div>

                    <div class="panel panel-body">

                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="panel panel-default" style="margin-top:15px">

                                            <table class="table table-hover table-bordered" id="sampleTable">
                                                <tr>
                                                    <th>Client Id</th>
                                                    <td>{{$clientById->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Client Name</th>
                                                    <td>{{$clientById->client_name}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Client Designation</th>
                                                    <td>{{$clientById->client_designation}}</td>

                                                </tr>

                                                <th>Client Message</th>
                                                <td>{{$clientById->client_message}}</td>

                                                </tr>

                                                <tr>
                                                    <th>Client Image</th>
                                                    <td><img src="{{ asset($clientById->client_image) }}" alt="" height="150" width="150"></td>

                                                </tr>
                                                <tr>
                                                    <th>Publication Status</th>
                                                    <td>{{$clientById->publication_status}}</td>

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection