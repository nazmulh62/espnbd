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
                            <h1><i class="fa fa-home fa-lg"></i>View Notice Content Details</h1>
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
                                                    <th>Notice Id</th>
                                                    <td>{{$noticeById->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Notice Title</th>
                                                    <td>{{$noticeById->notice_title}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Author Name</th>
                                                    <td>{{$noticeById->author_name}}</td>

                                                </tr>

                                                    <th>Notice Description</th>
                                                    <td>{{$noticeById->notice_description}}</td>

                                                </tr>

                                                <tr>
                                                    <th>Notice Image</th>
                                                    <td><img src="{{ asset($noticeById->notice_image) }}" alt="" height="150" width="150"></td>

                                                </tr>
                                                <tr>
                                                    <th>Publication Status</th>
                                                    <td>{{$noticeById->publication_status}}</td>

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