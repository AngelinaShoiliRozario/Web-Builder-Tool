<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    {{-- my own site css --}}
    <link rel="stylesheet" href="{{ asset('assets/Custom/css/button_style.css') }}">
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
        const edit_button = (tag) => {
            global_btn = tag;
            console.log('global');
            console.log(global_btn);
            // another way
            let check = document.querySelector('#selected_btn__');
            let button_editor = document.querySelector('#drag_btn_item__');

            button_editor.style.display = '';


            if (check != tag && check != null) {
                check.setAttribute('id', '');
                console.log('check');
                console.log(check);
            }
            tag.setAttribute('id', 'selected_btn__');

            let btn_text = document.querySelector('#btn_editor_btn_text');
            btn_text.value = tag.innerHTML;

            console.log('tag');

            console.log(tag);
            let btn_width_1 = document.querySelector('#btn_width_1');

            //             let width = tag.style.width;
            //             let widthWithoutPx = parseInt(width, 10);
            //             console.log(widthWithoutPx);
            //             btn_width_1.setAttribute('min',widthWithoutPx);
            //             btn_width_1.setAttribute('max',(widthWithoutPx+100));
            // console.log(btn_width_1);

        }
        const btn_text_changer = (tag) => {
            let selected_btn__ = document.querySelector('#selected_btn__');
            selected_btn__.innerHTML = tag.value;
        }
    </script>
    <script>
        //  width change of btn 
        const width_change_of_btn = (tag) => {
            let btn_width_1 = document.querySelector('#btn_width_1');
            btn_width_1.setAttribute('value', tag.value);
            let selected_btn__ = document.querySelector('#selected_btn__');
            selected_btn__.style.paddingLeft = `${tag.value}px`;
            selected_btn__.style.paddingRight = `${tag.value}px`;
        }
        //  height change of btn 
        const height_change_of_btn = (tag) => {
            let btn_width_2 = document.querySelector('#btn_width_2');
            btn_width_2.setAttribute('value', tag.value);
            let selected_btn__ = document.querySelector('#selected_btn__');
            selected_btn__.style.paddingTop = `${tag.value}px`;
            selected_btn__.style.paddingBottom = `${tag.value}px`;

            btn_width_2.setAttribute('value', tag.value);
        }
        const btn_font_size_changer = (tag) => {
            // console.log(tag.value);
            let selected_btn__ = document.querySelector('#selected_btn__');
            selected_btn__.style.fontSize = `${tag.value}px`;
        }
        const change_btn_transform = (content) => {
            let selected_btn__ = document.querySelector('#selected_btn__');
            let text = selected_btn__.textContent;
            // console.log(text);
            const u = selected_btn__.querySelector('u');
            const b = selected_btn__.querySelector('b');
            const i = selected_btn__.querySelector('i');

            if (content == 'underline') {
                if (u != null) {
                   
                           const newTextNode = document.createTextNode(u.textContent);
                           newTextNode.innerText= 'hellooo';
  selected_btn__.replaceChild(newTextNode, u);

                       
                } else {
                    let uc = document.createElement('u');
                    uc.innerText = text;
                    // Loop through each child node of the button
                    selected_btn__.childNodes.forEach(childNode => {
                        if (childNode.nodeType === Node.TEXT_NODE) {
                            // Replace the original text node with the new u element
                            selected_btn__.replaceChild(uc, childNode);
                        }
                    });
                }
            }
            if (content == 'bold') {
                if (b != null) {

                } else {

                }
            }
            if (content == 'italic') {
                if (i != null) {

                } else {

                }
            }
        }
    </script>

</body>

</html>
