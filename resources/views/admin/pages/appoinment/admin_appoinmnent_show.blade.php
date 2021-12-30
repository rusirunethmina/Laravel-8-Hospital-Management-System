@extends('admin.home')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Appointment List</h4>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Approved</th>
                        <th scope="col">Cancle</th>
                        <th scope="col">Send Mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appoinment as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->number }}</td>
                        <td>{{ $data->doctor }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->message }}</td>
                        <td>{{ $data->status }}</td>
                        <td><a href="{{ url('approved',$data->id) }}"><span class="badge badge-success">Approved</span></td></a>
                        <td><a href="{{ url('cancle',$data->id) }}"><span class="badge badge-danger">Cancle</span></td></a>
                        <td><a href="{{ url('emailview',$data->id) }}"><span class="badge badge-info">Send Mail</span></td></a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
