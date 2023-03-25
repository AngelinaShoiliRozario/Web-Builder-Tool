@extends('layouts.EditorMode.webpage_editor')
@section('title')
    <title>Felax on Editor Mode</title>
@endsection

@section('header_imports')
    <style>
        .padding_button {
            position: relative;
            background-color: blueviolet;
            /* Green */
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 32px;
            height: 120px;
            width: 180px;
            text-align: center;
            text-decoration: none;
            color: white;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .top {
            position: absolute;
            display: flex;
            width: 100%;
            top: 0;
            left: 50%;
            border: none;
            transform: translate(-50%, 0%);
        }

        .bottom {
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 100%;
            border: none;

            transform: translate(-50%, 0%);
        }

        .left {
            position: absolute;
            top: 50%;
            left: 0;
            border: none;
            height: 100%;
            transform: translate(0%, -50%);
        }

        .right {
            position: absolute;
            top: 50%;
            right: 0;
            height: 100%;
            border: none;

            transform: translate(0%, -50%);
        }

        .editor {
            background-color: #313131;
            padding: 10px;
        }
    </style>
    <!-- Link of CSS files -->
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/fontawsome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/responsive.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/Felax/images/fav-icon.png') }}">
@endsection

@section('site')
    @include('layouts.editComponents.texteditor')
    @include('Templates.Felax.index.index')
@endsection

@section('script_imports')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- Link of JS files -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/Felax/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/TweenMax.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/appear.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script>
        const contenteditable = document.querySelectorAll('.contenteditable');
        const newDiv = document.getElementById('text-editor-id');
        Array.from(contenteditable).forEach((element) => {
            element.addEventListener('click', () => {
                const clickableDiv = element;
                let parentDiv = element.parentNode;
                // const newDiv = document.createElement("div");
                newDiv.classList.remove('d-none');

                parentDiv.insertBefore(newDiv, clickableDiv);
                element.style.border = '1px solid blue';
            });
        });
        // $('.contenteditable').click(function() {
        //     $('.contenteditable').css('border', '');
        //     $('.contenteditable').css('position', 'relative');

        //     $(this).css('border', '1px solid blue');
        //     $(this).attr('contenteditable', true);
        //     // JavaScript code
        //     const clickableDiv = $(this);
        //     let parentDiv = clickableDiv.parentNode;

        //     clickableDiv.addEventListener("click", function() {
        //         const newDiv = document.createElement("div");
        //         newDiv.textContent = "New div block";
        //         parentDiv.insertBefore(newDiv, clickableDiv);
        //     });
        // });
    </script>
@endsection
