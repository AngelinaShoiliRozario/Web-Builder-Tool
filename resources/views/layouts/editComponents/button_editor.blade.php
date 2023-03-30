<div id="drag_btn_item__"
    style="top:300px;left:200px;background:#f2f2f2;color:#2f373a;width:380px;padding:0px;z-index:1000;box-shadow:0 0 5px gray;box-sizing:border-box;position:fixed;display:none;">
    <nav id="drag-handle"
        style="cursor:move;background:#2f373a;color:white;padding:10px;display:flex;justify-content:space-between;">
        <div>
            <span style="cursor:pointer;text-transform:uppercase;padding:5px;color:tomato;border:1px solid tomato;"
                onclick="showbtn_content_design(this, 'content')" id="c1">Content</span>
            <span style="cursor:pointer;text-transform:uppercase;padding:5px;"
                onclick="showbtn_content_design(this, 'design')" id="d1">Design</span>
        </div>
        <div style="cursor: pointer;">
            <span><i class="fa-solid fa-xmark" style="font-size: 23px;" onclick="remove_btn_editor(this)"></i></span>
        </div>
    </nav>
    <div id="button_content" style="height:100%;">
        <h3
            style=" text-align:center;text-transform:uppercase;border-top:1px solid gray;background:#2f373a;color:white;padding:10px;margin-bottom:0px!important;">
            Button Content</h3>
        <div style="height:500px;overflow-y:scroll!important;padding:15px;">
            <div class="content">
                <div class="box1" style="background: white;padding:20px;margin-bottom:10px;">
                    <label for="">Text On button</label>
                    <input type="text" value="" style="width:100%;padding:3px;" id="btn_editor_btn_text"
                        oninput="btn_text_changer(this)">
                </div>
                <p>Select where button links to</p>
                <div>
                    <div style="background: white;padding:20px; margin-bottom:10px;">
                        <div style="display: flex;align-items:center;gap:6px;">
                            <input type="radio" name="option" style="height:100%;" id="existing_page">
                            <label for="existing_page" onclick="show_subpart(1)">Existing Page</label>
                        </div>
                        <select class="option_sub_content option_sub_content_1"
                            style="padding:5px;width:100%;display:none;margin-top:8px;">
                            <option value="home">Home</option>
                            <option value="rooms">Rooms</option>
                            <option value="services">Services</option>
                            <option value="pages">Pages</option>
                            <option value="blogs">Blogs</option>
                            <option value="contact us">Contact Us</option>
                        </select>
                    </div>

                    <div style="background: white;padding:20px;margin-bottom:10px;">
                        <input type="radio" name="option" id="website_url">
                        <label for="website_url" onclick="show_subpart(2)">Website URL</label>
                        <div style="display: none; " class="option_sub_content option_sub_content_2">
                            <input style="font-style: italic;width:100%;padding:3px;margin-bottom:5px;margin-top:8px;"
                                type="text" placeholder="https://www.google.com/">
                            <div style="display: flex;align-items:center;gap:6px;">
                                <input type="checkbox" name="" id="new_tab">
                                <label for="new_tab">Open in a new window</label>
                            </div>
                        </div>
                    </div>
                    <div style="background: white;padding:20px;margin-bottom:10px;">
                        <input type="radio" name="option" id="pop_up">
                        <label for="pop_up" onclick="show_subpart(3)">Popup</label>
                        <div class="option_sub_content option_sub_content_3" style="display: none;">
                            <u style="margin-top: 8px;">Create a new popup</u>
                        </div>
                    </div>
                    <div style="background: white;padding:20px;margin-bottom:10px;">
                        <input type="radio" name="option" id="anchor">
                        <label for="anchor" onclick="show_subpart(4)">Anchor</label>
                        <div style="display:none;" class="option_sub_content option_sub_content_4">
                            <div style="display: flex;margin-bottom:10px;margin-top:10px;">
                                <label for="" style="width:30%;">Page</label>
                                <select name="" id="" style="width:70%;">
                                    <option value="home">Home</option>
                                    <option value="rooms">Rooms</option>
                                    <option value="services">Services</option>
                                    <option value="pages">Pages</option>
                                    <option value="blogs">Blogs</option>
                                    <option value="contact us">Contact Us</option>
                                </select>
                            </div>
                            <div style="display: flex;">
                                <label for="" style="width:30%;">Anchor</label>
                                <select name="" id="" style="width:70%;">
                                    <option value="home">Home</option>
                                    <option value="rooms">Rooms</option>
                                    <option value="services">Services</option>
                                    <option value="pages">Pages</option>
                                    <option value="blogs">Blogs</option>
                                    <option value="contact us">Contact Us</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div style="background: white;padding:20px;margin-bottom:10px;">
                        <input type="radio" name="option" id="blog_post">
                        <label for="blog_post" onclick="show_subpart(5)">Blog Post</label>
                        <div class="option_sub_content option_sub_content_5" style="display:none;">
                            <select style="width:100%;padding:3px;margin-top:10px;">
                                <option value="null" selected>Select</option>
                                <option value="b1">Blog Post 1</option>
                                <option value="b2">Blog Post 2</option>
                                <option value="b3">Blog Post 3</option>
                                <option value="b1">Blog Post 1</option>
                            </select>
                        </div>
                    </div>
                    <div style="background: white;padding:20px;margin-bottom:10px;">
                        <input type="radio" name="option" id="email_address">
                        <label for="email_address" onclick="show_subpart(6)">Email Address</label>
                        <div class="option_sub_content option_sub_content_6" style="display:none;">
                            <input type="text" style="font-style:italic;padding:3px;width:100%;margin-top:8px;"
                                placeholder="email@example.com">
                        </div>
                    </div>
                    <div style="background: white;padding:20px;margin-bottom:10px;">
                        <input type="radio" name="option" id="file">
                        <label for="file" onclick="show_subpart(7)">File to Download</label>
                        <div class="option_sub_content option_sub_content_7" style="display: none;">
                            <input type="file" style="margin-top:8px;">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="button_design" style="display: none;">
        <h3
            style="text-align: center;text-transform:uppercase;border-top:2px solid gray;background:#2f373a;color:white;padding:10px;margin-bottom:0px!important;">
            Button Design</h3>
        <nav style="display:flex;border-bottom:1px solid gray;padding:8px;">
            <span style="width: 25%;text-align:center;cursor:pointer;"
                onclick="show_sub_part(this,'layout__')">Layout</span>
            <span style="width: 25%;text-align:center;cursor:pointer;"
                onclick="show_sub_part(this,'style__')">Style</span>
            <span style="width: 25%;text-align:center;cursor:pointer; "
                onclick="show_sub_part(this,'animation__')">Animation</span>
            <span style="width: 25%;text-align:center;cursor:pointer;"
                onclick="show_sub_part(this,'spacing__')">Spacing</span>
        </nav>
        <div>
            <div style="height: 500px;overflow-y:scroll!important;padding:10px;">

                <div class="layout" id="layout__" style="cursor:pointer;background: white;">
                    <div>

                        <div style="display:flex;align-items:center;justify-content:center;padding:15px;" onclick=" document.querySelector('#btn_side_menu___').style.display==='none' ?  document.querySelector('#btn_side_menu___').style.display='' : document.querySelector('#btn_side_menu___').style.display='none'">
                            <div >
                                <span
                                    style="background: #6f8188;padding:10px 40px;border-radius:8px;color:white;">Button</span>
                                <span style="margin-left:50px;">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </div>
                        </div>
                        <div id="btn_side_menu___" style="box-shadow:0 0 5px gray;position:absolute;height:100%;width:100%;background:#f2f2f2;top:0%;left:100%;cursor:default;display:none;">
                          <div style="width:100%;text-align:right;">
                            <i class="fa-solid fa-xmark" style="font-size: 23px;cursor:pointer;background:gray;padding:5px 9px;" onclick="document.querySelector('#btn_side_menu___').style.display='none'"></i>
                          </div>
                          <div  style="height:100%;width:100%;overflow-y:scroll;">

                              @include('layouts.editComponents.styled_buttons')
                          </div>
                           
                        </div>
                        <hr>
                        <div style="display:flex;justify-content:center;padding:15px;">
                            <span style="border:1px solid gray;padding:5px 15px;border-radius:20px;">Reset to theme
                                style</span>
                        </div>
                    </div>

                </div>
                <div class="style" id="style__" style="display:none;">

                    <div class="">

                        <div style="background: white;padding:15px;margin-bottom:20px;">
                            <div style="display: flex;align-items:center;margin-top:10px;">
                                <label for="" style="width:30%;">Width</label>
                                <div
                                    style="width:70%;display: flex; justify-content:space-between; align-items:center;">

                                    <input type="range" id="slider_1" name="slider_1" min="10"
                                        max="100" value="5"
                                        oninput="width_change_of_btn(this)">
                                    <input type="text" id="btn_width_1" value="0"
                                        style="width:60px;padding:5px;text-align:center;">
                                </div>
                            </div>
                            <div style="display: flex;align-items:center;margin-top:10px;">
                                <label for="" style="width:30%;">Height</label>
                                <div
                                    style="width:70%;display: flex; justify-content:space-between; align-items:center;">

                                    <input type="range" id="slider_2" name="slider_2" min="10"
                                        max="100" value="5"
                                        oninput="height_change_of_btn(this)">
                                    <input type="text" id="btn_width_2" value="0"
                                        style="width:60px;padding:3px 5px ;text-align:center;">
                                </div>
                            </div>
                        </div>
                        <div style="background: white;padding:15px;margin-bottom:20px;">
                            <div style="display: flex;justify-content:space-between;">
                                <label for="" style="width:30%;">Font</label>
                                <select name="" id="" style="width:60%;padding:3px;">
                                    <option value="">Abril Falface</option>
                                    <option value="Arial">Arial</option>
                                    <option value="Comfortoo">Comfortoo</option>
                                    <option value="Red Rose">Red Rose</option>
                                    <option value="Work Sans">Work Sans</option>
                                </select>
                            </div>
                            <div style="display: flex;justify-content:space-between;margin-top:8px;">
                                <label for="" style="width:30%;">Font Size</label>
                                <select name="" id="" style="width:60%;padding:3px;" onchange="btn_font_size_changer(this)">
                                    @for ($i = 5; $i < 90; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div style="display: flex;justify-content:space-between;margin-top:8px;">
                                <label for="" style="width:30%;">Font Color</label>
                                <div
                                    style="height: 25px;width:25px;border-radius:50%;border:1.5px solid gray;background:white;">
                                </div>
                            </div>
                            <div style="display: flex;justify-content:space-between;margin-top:25px;">
                                <label for="" style="width:30%;">Font Format</label>
                                <div>
                                    <span
                                        style="cursor:pointer;padding:8px 13px;background:#f2f2f2;box-shadow: inset 0 0 5px gray;" onclick="change_btn_transform('bold')"><i
                                            class="fa-solid fa-bold" ></i></span>
                                    <span style="cursor:pointer;padding:8px 13px;background:#f2f2f2;" onclick="change_btn_transform('underline')"><i
                                            class="fa-solid fa-underline" ></i></span>
                                    <span style="cursor:pointer;padding:8px 13px;background:#f2f2f2;" onclick="change_btn_transform('italic')"><i
                                            class="fa-solid fa-italic" ></i></span>

                                </div>
                            </div>
                            <div style="display: flex;justify-content:space-between;margin-top:25px;">
                                <label for="" style="width:30%;">Alignment</label>
                                <div>
                                    <span style="cursor:pointer;padding:8px 13px;background:#f2f2f2;"><i
                                            class="fa-solid fa-align-left"></i></span>
                                    <span
                                        style="cursor:pointer;padding:8px 13px;background:#f2f2f2;box-shadow:inset 0 0 5px gray;"><i
                                            class="fa-solid fa-align-center"></i></span>
                                    <span style="cursor:pointer;padding:8px 13px;background:#f2f2f2;"><i
                                            class="fa-solid fa-align-right"></i></span>

                                </div>
                            </div>
                            <hr>
                            <div style="display: flex;justify-content:space-between;margin-top:8px;">
                                <label for="">Hover Font Color</label>
                                <div
                                    style="height: 25px;width:25px;border-radius:50%;border:1.5px solid gray;background:white;">
                                </div>
                            </div>
                            <div style="display: flex;justify-content:space-between;margin-top:25px;">
                                <label for="">Hover Font Format</label>
                                <div>
                                    <span
                                        style="cursor:pointer;padding:8px 13px;background:#f2f2f2;box-shadow: inset 0 0 5px gray;"><i
                                            class="fa-solid fa-bold"></i></span>
                                    <span style="cursor:pointer;padding:8px 13px;background:#f2f2f2;"><i
                                            class="fa-solid fa-underline"></i></span>
                                    <span style="cursor:pointer;padding:8px 13px;background:#f2f2f2;"><i
                                            class="fa-solid fa-italic"></i></span>

                                </div>
                            </div>
                            <div style="display: flex;align-items:center;margin-top:10px;">
                                <label for="" style="width:50%;">Background Color</label>
                                <div style="width:50%;display: flex; justify-content:end; align-items:center;">
                                    <span
                                        style="background: blue;height:25px;width:25px;border-radius:50%;border:2px solid white;outline:1px solid gray;"></span>
                                </div>
                            </div>
                            <div style="display: flex;align-items:center;margin-top:10px;">
                                <label for="" style="width:30%;">Border</label>
                                <div
                                    style="width:70%;display: flex; justify-content:space-between; align-items:center;">
                                    <input type="range" id="slider_3" name="slider_3" min="10"
                                        max="100" value="5"
                                        oninput="document.querySelector('#btn_width_3').value = document.querySelector('#slider_3').value">
                                    <input type="text" id="btn_width_3" value="0"
                                        style="width:45px;padding:3px 5px ;text-align:center;">
                                    <span><i class="fa-solid fa-ban" style="font-size: 25px;"></i></span>
                                </div>
                            </div>
                            <hr>

                            <div>
                                <label for="" style="margin-bottom:10px;">Background Image:</label>
                                <div class="image"
                                    style="cursor: pointer;border: 2px dotted black;display:flex;align-items:center;justify-content:center;">
                                    <img src="{{ asset('/assets/Custom/images/add_img.png') }}" alt="add image here"
                                        style="height: 100px;">
                                </div>
                            </div>
                            <hr>
                            <div style="display:flex;justify-content:center;">
                                <span style="border:1px solid gray;padding:5px 15px;border-radius:20px;">Reset to theme
                                    style</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="animation" id="animation__" style="display:none;">
                    <div style="background: white;padding:15px;margin-bottom:20px;">
                        <div
                            style="display:flex;align-items:center;justify-content:space-between;cursor:pointer;padding:10px;">
                            <span>Animation</span>
                            <span><i class="fa-solid fa-caret-right"></i></span>
                        </div>
                        <div class="animation_subcontent">
                            <div style="display:flex;align-items:center;gap:10px;">
                                <span class="icon"><i class="fa-solid fa-computer"></i></span>
                                <span>Change affects desktop and tablet</span>
                            </div>
                            <div class="trigger"
                                style="display:flex;justify-content:space-between;align-items:center;margin-top:10px;">
                                <label for="" style="width:40%;">Trigger</label>
                                <select name="" id="" style="width:60%;padding:4px;">
                                    <option value="entrace">Entrance</option>
                                    <option value="Scroll">Scroll</option>
                                </select>
                            </div>
                            <div class="animation"
                                style="display:flex;justify-content:space-between;margin-top:10px;">
                                <label for="" style="width:40%;">Animation</label>
                                <select name="" id="" style="width:60%;padding:4px;">
                                    <option value="None">None</option>
                                    <option value="Fade In">Fade In</option>
                                    <option value="Slide In">Slide In</option>
                                    <option value="Bounce In">Bounce In</option>
                                    <option value="Rotate In">Rotate In</option>
                                    <option value="Roll in">Roll in</option>
                                    <option value="Zoom In">Zoom In</option>
                                    <option value="Flip in">Flip in</option>
                                    <option value="Flash">Flash</option>
                                    <option value="Pulse">Pulse</option>
                                    <option value="Shake">Shake</option>
                                    <option value="Tada">Tada</option>
                                    <option value="Wobble">Wobble</option>
                                </select>
                            </div>

                            <hr>


                            <div style="display:flex;justify-content:center;margin-bottom:10px;">
                                <span style="border:1px solid gray;padding:5px 15px;border-radius:20px;">Reset to
                                    theme
                                    style</span>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="spacing" id="spacing__" style="display:none;">
                    <div style="background: white;padding:15px;margin-bottom:20px;">
                        <div>
                            <label for="">Letter Spacing</label>
                            <div style="display: flex;align-items:center;margin-top:10px;">
                                <div
                                    style="width:100%;display: flex; justify-content:space-between; align-items:center;">

                                    <input type="range" id="slider_space" name="slider_space" min="0"
                                        max="2.5" value="1.5" step="0.1" value="5"
                                        style="width:60%;"
                                        oninput="document.querySelector('#btn_width_space').value = document.querySelector('#slider_space').value">
                                    <input type="text" id="btn_width_space" value="1.5"
                                        style="width:60px;padding:5px;text-align:center;">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">Top Bottom Spacing</label>
                            <div style="display: flex;align-items:center;margin-top:10px;">
                                <div
                                    style="width:100%;display: flex; justify-content:space-between; align-items:center;">

                                    <input type="range" id="slider_tb" name="slider_tb" min="1"
                                        max="50" value="10" style="width:60%;"
                                        oninput="document.querySelector('#btn_width_tb').value = document.querySelector('#slider_tb').value">
                                    <input type="text" id="btn_width_tb" value="10"
                                        style="width:60px;padding:5px;text-align:center;">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">Left and Right Padding</label>
                            <div style="display: flex;align-items:center;margin-top:10px;">
                                <div
                                    style="width:100%;display: flex; justify-content:space-between; align-items:center;">

                                    <input type="range" id="slider_lr" name="slider_lr" min="1"
                                        max="50" value="15" style="width:60%;"
                                        oninput="document.querySelector('#btn_width_lr').value = document.querySelector('#slider_lr').value">
                                    <input type="text" id="btn_width_lr" value="15"
                                        style="width:60px;padding:5px;text-align:center;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
    // for dragging
    var dragItem = document.querySelector("#drag_btn_item__");
    var dragHandle = document.querySelector("#drag-handle");
    // var dragHandle2 = document.querySelector("#drag-handle2");
    // Initialize the variables used to track the position of the draggable div
    var startX, startY, mouseX, mouseY, deltaX, deltaY;
    // Set the drag event listeners only on the handle element
    dragHandle.addEventListener("mousedown", dragStart);
    dragHandle.addEventListener("mouseup", dragEnd);

    function dragStart(e) {
        startX = e.clientX;
        startY = e.clientY;

        // Set the mousemove and mouseup event listeners
        document.addEventListener("mousemove", drag);
        document.addEventListener("mouseup", dragEnd);
    }

    function drag(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;

        deltaX = mouseX - startX;
        deltaY = mouseY - startY;

        // Update the position of the draggable div
        dragItem.style.left = dragItem.offsetLeft + deltaX + "px";
        dragItem.style.top = dragItem.offsetTop + deltaY + "px";

        startX = mouseX;
        startY = mouseY;
    }

    function dragEnd(e) {
        // Remove the mousemove and mouseup event listeners
        document.removeEventListener("mousemove", drag);
        document.removeEventListener("mouseup", dragEnd);
    }
</script>
<script>
    const showbtn_content_design = (thistag, type) => {

        let c1 = document.querySelector('#c1');
        c1.style.color = '';
        c1.style.border = 'none';
        let d1 = document.querySelector('#d1');
        d1.style.color = '';
        d1.style.border = 'none';


        if (type === 'content') {
            c1.style.color = "tomato";
            c1.style.border = '1px solid tomato';

            let tag = document.querySelector('#button_content');
            tag.style.display = '';
            let d = document.querySelector('#button_design');
            d.style.display = 'none';
        } else {
            d1.style.color = "tomato";
            d1.style.border = '1px solid tomato';

            let tag = document.querySelector('#button_design');
            tag.style.display = '';
            let c = document.querySelector('#button_content');
            c.style.display = 'none';
        }
    }
    const show_subpart = (value) => {
        console.log('option_sub_content_' + value);
        let content = document.querySelector('.option_sub_content_' + value);
        let contents = document.querySelectorAll('.option_sub_content');
        contents = Array.from(contents);
        contents.forEach(element => {
            if (element !== content) {
                element.style.display = 'none';
            }
        });
        console.log(content);
        content.style.display = '';
    }
    const show_sub_part = (thistag, id) => {

        if (id == 'layout__') {
            let tag = document.querySelector('#layout__');

            let style__ = document.querySelector('#style__');
            style__.style.display = 'none';
            let animation__ = document.querySelector('#animation__');
            animation__.style.display = 'none';
            let spacing__ = document.querySelector('#spacing__');
            spacing__.style.display = 'none';


            tag.style.display === 'none' ? tag.style.display = '' : tag.style.display = 'none';
            tag.style.display === 'none' ? thistag.style.color = 'black' : thistag.style.color = 'blue';
        }

        if (id == 'style__') {
            let layout__ = document.querySelector('#layout__');
            layout__.style.display = 'none';
            let animation__ = document.querySelector('#animation__');
            animation__.style.display = 'none';
            let spacing__ = document.querySelector('#spacing__');
            spacing__.style.display = 'none';

            let tag = document.querySelector('#style__');
            tag.style.display === 'none' ? tag.style.display = '' : tag.style.display = 'none';
            tag.style.display === 'none' ? thistag.style.color = 'black' : thistag.style.color = 'blue';
        }

        if (id == 'animation__') {
            let style__ = document.querySelector('#style__');
            style__.style.display = 'none';
            let layout__ = document.querySelector('#layout__');
            layout__.style.display = 'none';
            let spacing__ = document.querySelector('#spacing__');
            spacing__.style.display = 'none';

            let tag = document.querySelector('#animation__');
            tag.style.display === 'none' ? tag.style.display = '' : tag.style.display = 'none';
            tag.style.display === 'none' ? thistag.style.color = 'black' : thistag.style.color = 'blue';
        }

        if (id == 'spacing__') {
            let style__ = document.querySelector('#style__');
            style__.style.display = 'none';
            let layout__ = document.querySelector('#layout__');
            layout__.style.display = 'none';
            let animation__ = document.querySelector('#animation__');
            animation__.style.display = 'none';

            let tag = document.querySelector('#spacing__');
            tag.style.display === 'none' ? tag.style.display = '' : tag.style.display = 'none';
            tag.style.display === 'none' ? thistag.style.color = 'black' : thistag.style.color = 'blue';
        }
    }
</script>
