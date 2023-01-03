<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @meta_tags

    <link rel="shortcut icon" href="{{ asset('storage/website/'.$setting->favicon) }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@0;1&family=Roboto+Slab:wght@500&family=Rubik:wght@400;500&family=Vollkorn:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script src="{{ asset('dist/js/iziToast.min.js') }}" type="text/javascript"></script>

</head>

<body>

    <div class="container p-5">
        <h1 class="py-3 border-5 border-bottom my-5">Edit Profile</h1>

        <div class="row">
            <div class="col-lg-12">
                <div class="border shadow-sm p-3 mb-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/control-form-input.js') }}"></script>

    <script src="{{ asset('assets/js/preview-upload-image.js') }}"></script>

    <x-toasts />
</body>

</html>
