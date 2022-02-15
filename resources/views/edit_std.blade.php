@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                <a href="backend/{{ url('add_data') }}" class="btn btn-outline-info float-right">Add Data</a>
                </div>

                <div class="card-body">
                {{--  @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  --}}

                  <form class="d-block mx-auto" action="{{ url('edit_process') }}" method="POST">
                  @csrf
                    <input type="hidden" name="edit_id" value="{{ $std_list->id }}">
                  <div class="form-group">
                        <label>Student Name : </label>
                        <input type="text" name="user_name" class="form-control col-md-6 mb-3" placeholder="Enter Your Name...!!" value="{{ $std_list->name }}">
                        
                        @error('user_name')
                        <span class="alert alert-warning text-danger p-2">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="form-group">
                        <label>Student Address : </label>
                        <textarea cols="12" row="8" class="form-control col-sm-6 mb-3"  name="user_addrs"  placeholder="Enter Your Address...!!" >{{ $std_list->address }}</textarea>
                        @error('user_addrs')
                        <span class="alert alert-warning text-danger p-2">{{ $message }}</span>
                        @enderror
                  </div>
                  <input type="submit" value="Update Data" class="btn btn-info">
                  </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
