<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')

    @yield('header_imports')
</head>

<body style="overflow: hidden;">
    <main>
        <nav class="text-white" style="position: sticky;top:0px;height:50px;background:black;z-index:1000;">
            @include('layouts.editComponents.top_navbar')
        </nav>
        <div class="position-fixed" style="width:100%;">
            <div class="" style="display:flex;">
                <div class="" style="border:1px solid gray; width:120px; height:100vh;">

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
    <script>
        // setting global variable
        let global_btn;
    </script>
    <script>
        const edit_button = (tag) => {
            global_btn = tag;
            console.log('global');
            console.log(global_btn);
            // another way
            let check = document.querySelector('#selected_btn__');
            let button_editor = document.querySelector('#drag_btn_item__');

            button_editor.style.display='';

            
            if (check != tag && check != null) {
                check.setAttribute('id', '');
            console.log('check');
                console.log(check);
            }
            tag.setAttribute('id', 'selected_btn__');

            console.log('tag');

            console.log(tag);
        }
    </script>
</body>

</html>
