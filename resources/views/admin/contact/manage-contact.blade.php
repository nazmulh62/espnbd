@extends('admin.master')
@section('title')

    ESPNBD | Contact Manage

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class="panel-default">
                    <div class="panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>Customer Contact Info Data Table</h1>
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
                                                <th> Name</th>
                                                <th> Email</th>
                                                <th> Subject</th>
                                                <th> Comment</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach($contacts as $contact)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{$contact->name}}</td>
                                                    <td>{{$contact->email}}</td>
                                                    <td>{{$contact->subject}}</td>
                                                    <td>{{$contact->comment}}</td>
                                                    <td class="center">


                                                        <a href="{{url('/contact/delete/'.$contact->id)}}" onclick="confirm('Are you Sure you Want To delete this!!')" class="btn btn-danger btn-xs" title="Delete contact">
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