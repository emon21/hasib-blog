@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                <p style="color:red;padding-top:5px;" class="float-left">Student Information List :)</p>
                
                <a href="backend/{{ url('add_data') }}" class="btn btn-outline-info float-right mt-1">Add Data</a>
                </div>

                <div class="card-body">
                 <table class="table table-bordered  table-striped tablesorter">
                 <tr>
                 <th>SL N0</th>
                 <th>Student Name</th>
                 <th>Student Address</th>
                 <th>Update_at</th>

                 <th>Action</th>

                 </tr>
                 @php
                 $sl =1;
                 @endphp
                 @foreach($std_list AS $list)
                 <tr>
                 <td>{{ $sl++; }}</td>
                 <td>{{ $list->name }}</td>
                 <td>{{ $list->address }}</td>
                 <td>
                  @if($list->updated_at )
                        {{ $list->updated_at->diffForHumans() }}
                        <br/>
                        {{ $list->updated_at->format('d-M-Y h:i:s A') }}
                 @endif
                 </td>  
                 <td>
                 <a href="backend/{{ url('delete_data') }}/{{ $list->id }}" class="btn btn-danger" onclick="return confirm('Are You Sure Delete This Data Y/N ?')">Delete</a>
                 <a href="backend/{{ url('edit_data',$list->id) }}" class="btn btn-success">Edit</a>
                 </td>

                 </tr>
                 @endforeach
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
