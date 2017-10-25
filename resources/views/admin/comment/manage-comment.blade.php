@extends('admin.master')
@section('title')

    ESPNBD | Comment Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Customer Comment Data Table</h1>
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
                                                <th>Customer Name</th>
                                                <th>Customer Email</th>
                                                <th>Customer Comment</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($comments as $comment)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{$comment->customer_name}}</td>
                                                    <td>{{$comment->customer_email}}</td>
                                                    <td>{{$comment->customer_comment}}</td>
                                                    <td class="center">

                                                        <a href="{{url('/comment/details/'.$comment->id)}}" class="btn btn-info btn-xs" title="View comment Details">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                        </a>

                                                        <a href="{{url('/comment/delete/'.$comment->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete comment">
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