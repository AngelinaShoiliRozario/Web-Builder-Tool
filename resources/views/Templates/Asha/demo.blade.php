@extends('layouts.EditorMode.webpage_editor')
@section('title')
    <title>Asha on Editor Mode</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css" />
@endsection

@section('header_imports')
    <!-- Favicons -->
    <link href="{{ asset('assets/Asha/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/Asha/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/Asha/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Asha/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Asha/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Asha/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Asha/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Asha/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Asha/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/Asha/css/style.css') }}" rel="stylesheet">
    {{-- mine --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
@endsection

@section('site')
    @include('layouts.editComponents.button_editor')
    @include('layouts.editComponents.texteditor')
    @include('Templates.Asha.index')
@endsection

@section('script_imports')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- Link of JS files -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/Asha/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/Asha/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Asha/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/Asha/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/Asha/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Asha/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/Asha/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/Asha/js/main.js') }}"></script>

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
