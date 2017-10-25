@extends('admin.master')
@section('title')

    ESPNBD | Notice Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Notice Data Table</h1>
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
                                                <th>Notice Title</th>
                                                <th>Author Name</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($notices as $notice)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{$notice->notice_title}}</td>
                                                    <td>{{$notice->author_name}}</td>
                                                    <td>{{$notice->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                                    <td class="center">

                                                        <a href="{{url('/notice/details/'.$notice->id)}}" class="btn btn-info btn-xs" title="View Notice Details">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                        </a>
                                                        @if($notice->publication_status == 1)

                                                            <a href="{{url('/notice/unpublished/'.$notice->id)}}" class="btn btn-success btn-xs" title="Published Notice">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{url('/notice/published/'.$notice->id)}}" class="btn btn-warning btn-xs" title="Unpublished Notice">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{url('/notice/edit/'.$notice->id)}}" class="btn btn-primary btn-xs" title="Edit Notice">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{url('/notice/delete/'.$notice->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete Notice">
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