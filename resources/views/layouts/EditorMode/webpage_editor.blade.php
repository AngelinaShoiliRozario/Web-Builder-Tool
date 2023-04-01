<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    {{-- my own site css --}}
    <link rel="stylesheet" href="{{ asset('assets/Custom/css/button_style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Custom/css/button_editor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Custom/css/sidebar.css') }}">


    {{-- template css links --}}
    @yield('header_imports')
</head>

<body style="overflow: hidden;">
    <main>
        <nav class="text-white" style="position: sticky;top:0px;height:50px;background:black;z-index:1000;">
            @include('layouts.editComponents.top_navbar')
        </nav>
        <div class="position-fixed" style="width:100%;">
            <div class="" style="display:flex;">
                <div class="">
@include('layouts.editComponents.sidebar.sidebar')
                </div>
                <div class="" style="flex:1;height:100vh;overflow:scroll;">
                    <div style="width:100%!important;position:relative;">
                        @yield('site')
                    </div>
                </div>

            </div>

        </div>
    </main>
    @yield('script_imports')
    <script src="{{ asset('/assets/Custom/js/button_editor.js') }}"></script>
    <script>
        const change_this_btn_ = (tag) => {
            let selected_btn__ = document.querySelector('#selected_btn__');
            selected_btn__.setAttribute('id', '');
            const newbtn = tag.cloneNode(true);
            newbtn.setAttribute('id', 'selected_btn__');
            newbtn.setAttribute('onclick', 'edit_button(this)');
            let parent = selected_btn__.parentNode;
            parent.replaceChild(newbtn, selected_btn__);
        }
    </script>
    <script>
        // setting global variable
        let global_btn;
    </script>
    <script>
       
    </script>


</body>

</html>
