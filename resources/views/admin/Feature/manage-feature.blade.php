@extends('admin.master')
@section('title')

    ESPNBD | Features Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Features Data Table</h1>
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
                                                <th>Feature Id</th>
                                                <th>Feature Title</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($features as $feature)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $feature->id }}</td>
                                                    <td>{{$feature->feature_title}}</td>
                                                    <td>{{$feature->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                                    <td class="center">
                                                        <a href="{{url('/feature/details/'.$feature->id)}}" class="btn btn-info btn-xs" title="View Feature Details">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                        </a>
                                                        @if($feature->publication_status == 1)

                                                            <a href="{{url('/feature/unpublished/'.$feature->id)}}" class="btn btn-success btn-xs" title="Published Feature">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{url('/feature/published/'.$feature->id)}}" class="btn btn-warning btn-xs" title="Unpublished Feature">
                                                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{url('/feature/edit/'.$feature->id)}}" class="btn btn-primary btn-xs" title="Edit Feature">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{url('/feature/delete/'.$feature->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete Feature">
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