<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9</title>
</head>
<body>

    @yield('content')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('alert'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Yea, the alert is working. ',
                icon: 'success',
                confirmButtonText: 'Very Good'
            })
        </script>
    @endif
</body>
</html>
