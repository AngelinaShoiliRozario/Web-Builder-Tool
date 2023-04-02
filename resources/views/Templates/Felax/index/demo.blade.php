@extends('layouts.EditorMode.webpage_editor')
@section('title')
    <title>Felax on Editor Mode</title>
    <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"
/>
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

        #text-editor-id:active {
            cursor: move;
        }

        /* for modal  */
        .modal-container {
            display: none;
            height: 100vh;
            width: 100%;
        }
       .modal {
            display: none;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.1);
            z-index: 1;
            position: fixed;
            top: 0;
            left: 0;
            align-items: center;
            justify-content: center;
        }

        .gradient-modal-content{
            border-radius: none;
        }
        .gradient-modal-body {
            width: 600px;
            height: 400px;
            border-radius: 2px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.2);
        }

        .mod {
            min-height: 20px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            background-color: white;
        }
        .gradient-modal-header{
            height: 55px;

        }
        .gradient-modal-footer {
            border-top: 1px solid gray;
            text-align: right;
            padding-right: 20px;
        }
        .modal-footer button{
            border: none;
            background-color: white;
            border: 1px solid rgb(125, 112, 112);
            font-size: 15px;
        }

        .gradient-close {
            float: right;
            margin: 10px;
            margin-top: 5px;
            font-size: 30px;
            cursor: pointer;
            padding-bottom: 10px;
        }

            
        .gradient-box {
            height: 150px;
            width: 90%;
            margin: 0px auto;
            border-radius: 7px;
            background: linear-gradient(to left top, #5665E9, #A271F8);
        }
        .gradient-row {
            display: flex;
            margin: 20px 0;
            justify-content: space-between;
        }
        .options p {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .gradient-row :where(.column, button) {
            width: calc(100% / 2 - 12px);
        }
        .options .select-box {
            border-radius: 5px;
            padding: 10px 15px;
            border: 1px solid #aaa;
        }
        .select-box select {
            width: 100%;
            border: none;
            outline: none;
            font-size: 1.12rem;
            background: none;
        }
        .options .palette {
            margin-left: 60px;
        }
        .palette input {
            height: 41px;
            width: calc(100% / 2 - 20px);
        }
        .palette input:last-child {
            margin-left: 6px;
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
    @include('layouts.editComponents.button_editor')
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
        const remove_btn_editor = (tag) => {
            let parent = tag.parentNode.parentNode.parentNode.parentNode;
            parent.style.display = 'none';
        }

        const remove_element = (tag) => {
            let parent = tag.parentNode.parentNode.parentNode.parentNode;
            parent.remove();
        }
        const showlineheightsub = (tag) => {
            console.log('hi');
            let p = tag.parentNode.children[1]
            if (p.style.display == 'none') {
                p.style.display = '';
            } else {
                p.style.display = 'none';
            }
        }

        const newDiv = document.getElementById('text-editor-id');

        const contenteditable = (element) => {

            console.log('parameter-  ' + element);

            element.setAttribute('contenteditable', true);
            console.log('clicked');

            if (element.parentNode.classList.contains('contentEditableContainer')) {

            } else {
                const contentEditableContainer = document.querySelectorAll('.contentEditableContainer');
                Array.from(contentEditableContainer).forEach((item) => {
                    let parent = item.parentNode;
                    let child = item.children[0];
                    const copyChild = child.cloneNode(true);
                    parent.replaceChild(copyChild, item);

                });


                const prev = document.getElementById('editor_text');
                if (prev) {
                    prev.remove();
                }

                // console.log(element);

                const div = document.createElement('div');
                div.classList.add('contentEditableContainer');
                div.style.position = "relative";

                // console.log(div);

                const newDiv = document.getElementById('text-editor-id');
                const copyEditor = newDiv.cloneNode(true);
                copyEditor.setAttribute('id', 'editor_text');
                copyEditor.style.display = "";
                copyEditor.style.bottom = '110%';

                // console.log(copyEditor);

                const copy_element = element.cloneNode(true);

                div.appendChild(copy_element);
                div.appendChild(copyEditor);


                element.parentNode.replaceChild(div, element);

                // console.log(div);
                div.style.border = '1px solid blue';
            }


        };
    </script>
    <script>
        const disable_editor = (tag) => {
            let parent = tag.parentNode.parentNode;
            parent.remove();
        }
    </script>
    <script>
        const showColorBox = () => {
            console.log('hello');

            document.getElementById('color_box').classList.remove('d-none');

        }
        const hideColorBox = () => {
            console.log('hello');

            document.getElementById('color_box').classList.add('d-none');
        }
        const changeColor = (value) => {
            document.execCommand('foreColor', false, value);
            // $("#content").css("color", value);
        }
        const setLineHeight = (value) => {
            console.log(value);
            let content = document.querySelector('.contentEditableContainer').children[0];
            console.log(content);
            if (value != null) {
                content.style.lineHeight = value;
            } else {
                var lineHeight = prompt("Enter the line height (e.g., 1.5):");
                if (lineHeight !== null) {
                    content.style.lineHeight = value;
                }
            }

        }
        $("#line-height-btn").click(function() {
            var lineHeight = prompt("Enter the line height (e.g., 1.5):");
            if (lineHeight !== null) {
                // $("#content").focus();
                // $("#content").css("line-height", lineHeight);
                $("#content").css("line-height", lineHeight);
                if (document.queryCommandSupported("lineHeight")) {
                    // document.execCommand("lineHeight", false, lineHeight);
                } else {
                    // fallback code for unsupported command
                    // alert("not supported");
                }
                // document.execCommand("lineHeight", false, lineHeight);
            }
        });

        const createLink = () => {
            var url = prompt("Enter the URL:");
            if (url !== null) {
                document.execCommand("createLink", false, url);
            }

        }
        const showfontFamilySub = (tag) => {
            let parent = tag.parentNode;
            let subpart = parent.children[1];
            if (subpart.style.display === 'none') {
                subpart.style.display = ''
            } else {
                subpart.style.display = 'none'
            }
        }
        const showHeadingSub = (tag) => {
            let parent = tag.parentNode;
            let subpart = parent.children[1];
            if (subpart.style.display === 'none') {
                subpart.style.display = ''
            } else {
                subpart.style.display = 'none'
            }
        }
        const showFontSize = (tag) => {
            let parent = tag.parentNode;
            let subpart = parent.children[1];
            if (subpart.style.display === 'none') {
                subpart.style.display = ''
            } else {
                subpart.style.display = 'none'
            }
        }
    </script>

    <script>
        // JavaScript code
        const setFontSize = (value) => {
            const selection = window.getSelection();
            console.log(selection);
            // if (selection.rangeCount > 0) {
            //     const range = selection.getRangeAt(0);
            //     let span = range.commonAncestorContainer;
            //     while (span && !(span.nodeName === 'SPAN' && span.getAttribute('contenteditable'))) {
            //         span = span.parentNode;
            //     }
            //     if (span) {
            //         span.style.fontSize = value + 'px';
            //     } else {
            //         span = document.createElement('span');
            //         span.style.fontSize = value + 'px';
            //         range.surroundContents(span);
            //     }
            // }
            document.execCommand('fontSize', false, value);

            // if (selection.rangeCount > 0) {
            //     const range = selection.getRangeAt(0);
            //     const span = document.createElement('span');
            //     span.style.fontSize = value + 'px';
            //     range.surroundContents(span);

            // }
        };


        function changeHeadingLevel(level) {
            document.execCommand("formatBlock", false, "h" + level);
        }

        function setFont(fontFamily) {
            console.log("hi");
            document.execCommand("fontName", false, fontFamily);
        }

        function changeHeading() {
            const contentDiv = document.getElementById("content");
            let id = contentDiv.id;
            let c = contentDiv.className;

            const newHeading = document.getElementById("heading-select").value;
            const currentHeading = contentDiv.tagName.toLowerCase();

            if (newHeading !== currentHeading) {
                const newContent = document.createElement(newHeading);
                newContent.innerHTML = contentDiv.innerHTML;
                newContent.setAttribute("id", id);
                newContent.setAttribute("class", c);
                newContent.setAttribute("contenteditable", true);

                contentDiv.parentNode.replaceChild(newContent, contentDiv);
            }
        }
    </script>

    {{-- script for button font color --}}
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script>
        
      // Simple example, see optional options for more configuration.
      const pickr = Pickr.create({
        el: ".color-picker",
        theme: "classic", // or 'monolith', or 'nano'

        swatches: [
          "rgba(244, 67, 54, 1)",
          "rgba(233, 30, 99, 0.95)",
          "rgba(156, 39, 176, 0.9)",
          "rgba(103, 58, 183, 0.85)",
          "rgba(63, 81, 181, 0.8)",
          "rgba(33, 150, 243, 0.75)",
          "rgba(3, 169, 244, 0.7)",
          "rgba(0, 188, 212, 0.7)",
          "rgba(0, 150, 136, 0.75)",
          "rgba(76, 175, 80, 0.8)",
          "rgba(139, 195, 74, 0.85)",
          "rgba(205, 220, 57, 0.9)",
          "rgba(255, 235, 59, 0.95)",
          "rgba(255, 193, 7, 1)",
        ],

        components: {
          // Main components
          preview: true,
          opacity: true,
          hue: true,

          // Input / output Options
          interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true,
          },
        },
      });
      pickr.on("change", (color, source, instance) => {
        let newColor = color.toRGBA();
        document.getElementById(
          "selected_btn__"
        ).style.color = `rgba(${newColor[0]},${newColor[1]},${newColor[2]},${newColor[3]})`;
      });
    </script>

    {{-- script for button  color --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script> --}}
    <script>
        
      // Simple example, see optional options for more configuration.
      const pickr = Pickr.create({
        el: ".bg-color-picker",
        theme: "classic",

        swatches: [
          "rgba(244, 67, 54, 1)",
          "rgba(233, 30, 99, 0.95)",
          "rgba(156, 39, 176, 0.9)",
          "rgba(103, 58, 183, 0.85)",
          "rgba(63, 81, 181, 0.8)",
          "rgba(33, 150, 243, 0.75)",
          "rgba(3, 169, 244, 0.7)",
          "rgba(0, 188, 212, 0.7)",
          "rgba(0, 150, 136, 0.75)",
          "rgba(76, 175, 80, 0.8)",
          "rgba(139, 195, 74, 0.85)",
          "rgba(205, 220, 57, 0.9)",
          "rgba(255, 235, 59, 0.95)",
          "rgba(255, 193, 7, 1)",
        ],

        components: {
          preview: true,
          opacity: true,
          hue: true,
          
          interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true,
          },
        },
      });
      pickr.on("change", (color, source, instance) => {
        let newColor = color.toRGBA();
        document.getElementById(
          "selected_btn__"
        ).style.color = `rgba(${newColor[0]},${newColor[1]},${newColor[2]},${newColor[3]})`;
      });
    </script>

@endsection
