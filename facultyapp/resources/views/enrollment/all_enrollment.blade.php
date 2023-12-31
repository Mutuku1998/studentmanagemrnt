@extends('admin.admin_dashboard')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2>Enrollment</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('add.enrollment')}}" class="btn btn-success btn-sm" title="Add New course">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <a href="{{route('export')}}" class="btn btn-info btn-sm text-white" title="download all enrollments">
                            <i class="fa fa-plus" aria-hidden="true"></i> Download
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Enroll NO.</th>
                                        <th>Batch.</th>
                                        <th>Student Adm</th>
                                        <th>Join Date</th>
                                        <th>Fee</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($enrollments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enroll_code}}</td>
                                        <td>{{ $item->batch_code}}</td>
                                        <td>{{ $item->student_adm}}</td>
                                        <td>{{ $item->join_date}}</td>
                                        <td>{{ $item->fee}}</td>
 
                                        <td>
                                           
                                          <a href="{{route('edit.enrollment',$item->id)}}" title="Edit  Course"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a onclick="confirmation(event)" href="{{route('delete.enrollment',$item->id)}}" title=" Delete Course"><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Delete</button></a>
 
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
         
@endsection