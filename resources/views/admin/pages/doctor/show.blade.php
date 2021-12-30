@extends('admin.home')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Doctor</h4>

                {{-- @if(Session()->has('message'))
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
                @endif --}}

                <form action="{{ route('add.doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Doctor Name</label>
                                <input type="text" class="form-control" name="dname" id="exampleInputUsername1"
                                    placeholder="Doctor Name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" name="pname" id="exampleInputEmail1"
                                    placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Specilaity</label>
                                <select class="form-control" name="specilaity" id="exampleFormControlSelect1">\
                                    <option>select specilaity</option>
                                    <option>skin</option>
                                    <option>legs</option>
                                    <option>head</option>
                                    <option>therepy</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Room No</label>
                                <input type="number" class="form-control" name="roomno" id="exampleInputEmail1"
                                    placeholder="Room No">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Doctor Image</label>
                            <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <button class="btn btn-dark">Cancel</button>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div> <br/><br/>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Doctor List</h4>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone </th>
                    <th scope="col">Specilaity</th>
                    <th scope="col">Room No</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($doctor as $data)
                  <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->specialty }}</td>
                    <td>{{ $data->room }}</td>
                    <td><img src="/images/doctor/{{ $data->image }}" style="widows: 80px; height:80px;"></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection
