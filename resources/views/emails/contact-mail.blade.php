<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container d-flex align-items-center justify-content-center vh-100 border">
        <div class="card border-secondary mb-3" style="max-width: 50rem">
            <div class="card-header">
                <h5 class="mb-0">Name ( From ) - {{ $name }}</h5>
            </div>
            <div class="card-body text-secondary">
                <div class="border-bottom my-3">
                    <h5 class="text-center mb-5">
                        ==========> Contact Detail <========== </h5>
                            <p>email - {{ $email }}</p>
                            <p>Phone - {{ $phone }}</p>
                            <p>Address - {{ $address }}</p>
                </div>
                <h4 class="card-title text-center">
                    ==========> Messages Detail <========== </h4>
                        <p class="card-text">
                            {{$content}}
                        </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
