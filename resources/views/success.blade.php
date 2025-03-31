<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="p-5 shadow rounded bg-white">
                <h1 class="text-success">Registration Successful</h1>
                <p class="text-secondary">Your registration has been completed successfully. Here are the details:</p>

                <div class="row mb-3">
                    <div class="col-12">
                        <label for="name">Name:</label>
                        <p class="form-control-plaintext">{{ $user['name'] }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <label for="email">Email:</label>
                        <p class="form-control-plaintext">{{ $user['email'] }}</p>
                    </div>
                </div>

                <a href="{{ route('register.form') }}" class="btn btn-info w-100 mt-3">
                    <i class="bi bi-arrow-left"></i> Back to Registration Form
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

