<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body>
<div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
    <div class="container text-center p-5 shadow rounded bg-white">
        <h1>Welcome to my website</h1>
        <p>This is the homepage of our Laravel Laboratory 9.</p>

        <a href="{{ route('register.form') }}" class="btn btn-info">Go to Registration <i class="bi bi-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
