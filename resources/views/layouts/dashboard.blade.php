<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>World News</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@0;1&family=Roboto+Slab:wght@500&family=Rubik:wght@400;500&family=Vollkorn:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>

    <script src="{{ asset('dist/js/iziToast.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('dist/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
</head>

<body>
    <x-dashboard-sidebar />

    <div id="main">
        <div class="row p-4 bg-secondary">
            <div class="col-12 d-flex align-items-center">
                <div onclick="toggleNav()" class="me-5" style="cursor: pointer">
                    <i class="fa-solid fa-bars fs-4"></i>
                </div>
                <div>
                    <h2>@yield("title")</h2>
                </div>
            </div>
        </div>
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/preview-upload-image.js') }}"></script>

    <script src="{{ asset('assets/js/sidebar.js') }}"></script>

    <script src="{{ asset('dist/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        ClassicEditor.create(document.querySelector(".editor"), {
        licenseKey: "",
      })
        .then((editor) => {
          window.editor = editor;
        })
        .catch((error) => {
          console.error("Oops, something went wrong!");
          console.error(
            "Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:"
          );
          console.warn("Build id: eucamibllt8y-vgerpv3c2fqz");
          console.error(error);
        });
    </script>

    <script>
        $(document).ready(function () {
$(".popup-gallery").magnificPopup({
    delegate: "a",
    type: "image",
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function (item) {
            return (
                '<i class="fa-solid fa-camera text-warning"></i> By '+
                item.el.attr("title")
            );
        },
    },
});
});


$(document).ready(function () {
$(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false,
});
});
    </script>

    <x-toasts />

</body>

</html>
