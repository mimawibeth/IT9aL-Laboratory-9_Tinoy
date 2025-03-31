<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <form class="p-5 shadow rounded bg-white" action="{{ route('register.submit') }}" method="POST">
                <h1>Registration Form</h1>
                <p class="text-secondary">Please fill out the form to create a new account.</p>

                @csrf

                <div class="row mb-3">
                    <div class="col-12 col-sm-6 w-100">
                        <label for="name">Name <span class="text-danger small">* </span></label>
                        <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control">
                        @error('name')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-sm-6 w-100">
                        <label for="email">Email <span class="text-danger small">* </span></label>
                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control">
                        @error('email')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-sm-6 w-100">
                        <label for="password">Password <span class="text-danger small">* </span></label>
                        <input type="password" name="password" id="password" class="form-control">
                        @error('password')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-sm-6 w-100">
                        <label for="password_confirmation">Confirm Password <span class="text-danger small">* </span></label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-info w-100"><i class="bi bi-person-plus"></i>  Register</button>
                <a href="{{ route('home') }}" class="btn btn-outline-info w-100 mt-2"> <i class="bi bi-arrow-left"></i> Cancel</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
