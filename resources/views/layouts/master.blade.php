<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Pegawai')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">App Pegawai</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('employees.index') }}">Employee</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('departments.index') }}">Department</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('positions.index') }}">Position</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('attendance.index') }}">Attendance</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('salaries.index') }}">Salaries</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>