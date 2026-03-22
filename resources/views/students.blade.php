<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Export / Import</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header class="bg-dark py-4 mb-4">
        <div class="container">
            <h1 class="text-white text-center">Laravel Student Export / Import</h1>
        </div>
    </header>

    <div class="container mb-4">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row align-items-center mb-3">
            <div class="col-md-8 mb-2">
                <form action="" method="GET" class="d-flex">
                    <input value="{{ Request::get('keyword') }}" type="text" class="form-control me-2" name="keyword" id="keyword" placeholder="Search by keyword">
                    <button class="btn btn-primary">Search</button>
                </form>
            </div>
            <div class="col-md-4 text-md-end text-start">
                <a class="btn btn-success" href="{{ route('students.export', ['keyword' => Request::get('keyword')]) }}">
                    📤 Download Excel
                </a>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">📥 Import Students from Excel</h5>
                <form action="{{ route('students.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-8">
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <div class="col-md-4 text-md-end text-start">
                            <button type="submit" class="btn btn-primary">
                                Import Excel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="mb-3">📋 Student List</h4>
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($students->isNotEmpty())
                            @foreach($students as $student)
                                <tr>
                                    <td class="text-center">{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->address }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center text-muted">No students found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    
</body>
</html>
