<!DOCTYPE html>
<html lang="en">
@include('user.head')

<body>

    @include('user.header')

    <br/><br/>

     <div class="container">
         <div class="card">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                    <th scope="col">Cancle Appoinment</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($appoinment as $data)
                  <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->date }}</td>
                    <td>{{ $data->message }}</td>
                    <td><span class="badge badge-success">{{ $data->status }}</span></td>
                    <td>
                        <span class="badge badge-danger"><a href="{{ url('appointment/cancle',$data->id) }}" onclick="return confirm('Are you sure?')">Cancle</span></td>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
         </div>
     </div>

    </body>
    </html>

     <br/><br/>

    @include('user.footer')

    @include('user.script')

</body>

</html>
