<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <div>
      <x-alert/>

        
    </div>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">User List</h5>

            <button class="btn btn-light btn-sm"><a href="{{url('school/create')}}">+ Add User</a></button>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>                            <th width="160">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Row -->
                        @foreach( $schools as $school )


                        <tr>
                            <td>{{$school->id}}</td>
                            <td>{{$school->name}}</td>
                            <td>{{$school->email}}</td>
                            <td>{{$school->address}}</td>

                            <td>

                                <button class="btn btn-sm btn-warning"><a href="{{url('school/edit',$school->id)}}">Edit</a></button>

                                <form action="{{url('school/delete',$school->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                          <button class="btn btn-sm btn-danger">Delete</button>

                                </form>

                            </td>
                        </tr>
                          @endforeach


                        <!-- End Sample -->
                    </tbody>
                </table>
                <div>{{$schools->links() }}</div>
            </div>
        </div>


    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
