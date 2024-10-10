<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Modern Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .message-container {
            margin: 10px 0;
            padding: 10px;
        }
        .success-message {
            background-color: #2ecc71;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
        }
        .error-message {
            background-color: #f34236;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Session Messages -->
        <div class="message-container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        <!-- Sign Up Form -->


        <!-- Table Section -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-bordered table-responsive">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone}}</td>

                            <form action="{{ route('delete',$student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <input type="hidden" name="Student_id" id="Student_id" value="{{ $student->id }}"> --}}
                                <td><button class="btn btn-danger" type="submit">Delete</button></td>
                            </form>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (with Popper for dropdowns, tooltips, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
