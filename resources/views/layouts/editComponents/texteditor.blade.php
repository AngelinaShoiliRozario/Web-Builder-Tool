<div class="d-none" style="display: inline-block!important;position:absolute;top:100px;" id="text-editor-id">
    <div class="editor d-flex flex-wrap">
        <button class="btn text-white" onclick="document.execCommand('bold', false, null)">
            <i class="fa-solid fa-bold"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('italic', false, null)">
            <i class="fa-solid fa-italic"></i>
        </button>

        <button class="btn text-white" onclick="document.execCommand('underline', false, null)"
            style="border: 1px solid gray">
            <i class="fa-solid fa-underline"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('justifyLeft', false, null)">
            <i class="fa-solid fa-align-left"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('justifyCenter', false, null)">
            <i class="fa-solid fa-align-center"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('justifyRight', false, null)">
            <i class="fa-solid fa-align-right"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('justifyFull', false, null)">
            <i class="fa-solid fa-align-justify"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('indent', false, null)">
            <i class="fa-solid fa-indent"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('outdent', false, null)">
            <i class="fa-solid fa-outdent"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('insertUnorderedList', false, null)">
            <i class="fa-solid fa-list-ul"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('insertOrderedList', false, null)">
            <i class="fa-solid fa-list-ol"></i>
        </button>
        <button class="btn text-white" onclick="createLink()">
            <i class="fa-solid fa-link"></i>
        </button>

        <div class="btn-group">
            <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Line Height
            </button>
            <ul class="dropdown-menu">

                <li>
                    <button class="dropdown-item" onclick="setLineHeight(1)">Single</button>
                    <!-- <button onmouseover="this.style.backgroundColor='green'; this.style.color='white';" class="dropdown-item"
              onclick="setLineHeight(1)">Single</button> -->
                </li>
                <li>
                    <button class="dropdown-item" onclick="setLineHeight(2)">1.5</button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setLineHeight(2)">Double</button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setLineHeight(3)"> 3 </button>
                </li>

                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#" style="text-align:center; "
                        onclick="setLineHeight(null)">Custom</a>
                </li>
            </ul>
        </div>
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Font Size
            </button>
            <ul class="dropdown-menu">

                <li>
                    <button class="dropdown-item" onclick="setFontSize(1)">1</button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFontSize(2)">2</button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFontSize(3)"> 3 </button>
                </li>

                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
        <!-- Example single danger button -->
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Font Family
            </button>
            <ul class="dropdown-menu">
                <li>
                    <button class="dropdown-item" onclick="setFont('Arial, sans-serif')">
                        Arial
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Times New Roman, serif')">
                        Times New Roman
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Tahoma, sans-serif')">
                        Tahoma
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Verdana, sans-serif')">
                        Verdana
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Georgia, serif')">
                        Georgia
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Times New Roman, serif')">
                        Times New Roman
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Lucida Console, Monaco, monospace')">
                        Monospace
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Courier New, monospace')">
                        Courier New
                    </button>
                </li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Heading
            </button>
            <ul class="dropdown-menu">
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(1)">
                        Heading 1
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(2)">
                        Heading 2
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(3)">
                        Heading 3
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(4)">
                        Heading 4
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(5)">
                        Heading 5
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(6)">
                        Heading 6
                    </button>
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
        <span class="d-flex justify-content-center position-relative"
            style="width:40px;border:1px solid transparent;flex-direction: column;align-items: center;cursor: pointer;"
            onmouseenter="showColorBox()" onmouseleave="hideColorBox()">
            <i class="fa-solid fa-a" style="font-size: 15px;color:white;"></i>
            <span class="mt-1">
                <div style="height:5px;width:20px;background-color: white;"></div>
            </span>
            <span class="d-none position-absolute p-2" id="color_box"
                style="top:100%;left:0px;height:200px;width:250px; background-color: #313131;">
                <div class="d-flex justify-content-center flex-wrap">
                    <!-- <input type="color" value="#FFFF00"> -->
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: yellow;display: inline-block;"
                        onclick="changeColor('yellow')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: red;display: inline-block;"
                        onclick="changeColor('red')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: blue;display: inline-block;"
                        onclick="changeColor('blue')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: green;display: inline-block;"
                        onclick="changeColor('green')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: tomato;display: inline-block;"
                        onclick="changeColor('tomato')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: pink;display: inline-block;"
                        onclick="changeColor('pink')"></span>
                </div>
                <br>
                <span>Custom</span>
                <br>
                <input type="color" value="#ff0000" style="width:100%;" onchange="changeColor(this.value)">

            </span>
        </span>

        <div class="btn text-success">
            <i class="fa-solid fa-check fa-beat" style="font-size: 20px;;"></i>
        </div>
    </div>
</div>
{{-- <div contenteditable="true" class="content" id="content"
        style="border: 1px solid transparent; outline: 1px solid transparent">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae voluptate
        cum impedit officia, veritatis quibusdam temporibus nulla saepe magni,
        tempora voluptatibus error molestias similique aliquid quod unde libero
        facilis! Alias.
    </div> --}}




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
        if (value != null) {
            $("#content").css("line-height", value);
        } else {
            var lineHeight = prompt("Enter the line height (e.g., 1.5):");
            if (lineHeight !== null) {
                $("#content").css("line-height", lineHeight);
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
</script>

<script>
    const setFontSize = (value) => {
        document.execCommand("fontSize", false, value);
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
