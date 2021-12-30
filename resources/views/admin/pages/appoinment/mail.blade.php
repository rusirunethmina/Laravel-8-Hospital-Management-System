@extends('admin.home')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Send Mail</h4>

        <form action="{{ url('send/email',$details->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Greeting</label>
                        <input type="text" class="form-control" name="greeting" id="exampleInputUsername1"
                            placeholder="Greeting">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <input type="text" class="form-control" name="body" id="exampleInputEmail1"
                            placeholder="Body">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Action Text</label>
                        <input type="text" class="form-control" name="actionText" id="exampleInputEmail1"
                            placeholder="Action Text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Action Url</label>
                        <input type="text" class="form-control" name="actionUrl" id="exampleInputEmail1"
                            placeholder="Action Url">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">End Part</label>
                        <input type="text" class="form-control" name="endPart" id="exampleInputEmail1"
                            placeholder="End Part">
                    </div>
                </div>
            </div>
            <button class="btn btn-dark">Cancel</button>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
        </form>
    </div>
</div>

@endsection
