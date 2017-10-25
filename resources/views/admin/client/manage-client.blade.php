@extends('admin.master')
@section('title')

    ESPNBD | Client Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Client Data Table</h1>
                            <p>Table to display analytical data effectively</p>

                        </div>

                    </div>

                    <div class="panel panel-body">

                        <div class="row">
                            <div class="col-md-12" style="width: 880px;">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                            <thead>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>Client Name</th>
                                                <th>Client Designation</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($clients as $client)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{$client->client_name}}</td>
                                                    <td>{{$client->client_designation}}</td>
                                                    <td>{{$client->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                                    <td class="center">

                                                        <a href="{{url('/client/details/'.$client->id)}}" class="btn btn-info btn-xs" title="View Details">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                        </a>
                                                        @if($client->publication_status == 1)

                                                            <a href="{{url('/client/unpublished/'.$client->id)}}" class="btn btn-success btn-xs" title="Published Client">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{url('/client/published/'.$client->id)}}" class="btn btn-warning btn-xs" title="Unpublished Client">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{url('/client/edit/'.$client->id)}}" class="btn btn-primary btn-xs" title="Edit Client">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{url('/client/delete/'.$client->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete Content">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            @endforeach
                                            </tbody>
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
@endsection