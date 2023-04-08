<div class="sidebar___">
    <div class="parent">
        <div class="icon" onclick="showChild_(this)">
            <i class="fa-solid fa-palette"></i>
            <span>
                <small>THEME</small>
            </span>
        </div>
        <div class="content" style="display:none;">
            <div style="display:flex;justify-content:space-between;padding:15px 20px;">
                <span>Site Theme</span>
                <span>
                    <i class="fa-solid fa-xmark" style="cursor:pointer;border:1px solid gray;padding:3px 5px;"></i>

                </span>
            </div>
            <div>
                <div>
                    <div class="content_part_1" onclick="show_content_part_sub(this)">
                        <span>Colors</span>
                        <span class="center_flex">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </div>
                    <div class="content_part_1_sub" style="display:none;">
                        <div>
                            <div style="display:flex;justify-content:space-between;padding: 15px 20px;">
                                <div style="display:flex;align-items:center;gap:10px;cursor:pointer;" onclick="">
                                    <span><i class="fa-solid fa-angle-left"></i></span>
                                    <span>Colors</span>
                                </div>
                                <div style="display:flex;align-items:center;gap:10px;">
                                    <span><i class="fa-solid fa-ellipsis" style="font-size:20px;"></i></span>
                                    <span><i class="fa-solid fa-question" style="font-size:20px;"></i></span>
                                    <span onclick="hide_content(this,4,-1)" style="cursor: pointer;"><i
                                            class="fa-solid fa-xmark" style="font-size:20px;"></i></span>
                                </div>
                            </div>
                            <div>
                                <div class="color_option">
                                    <span>Primary</span>
                                    <span class="single-color" id="color_1"
                                        style="background-color: goldenrod;"></span>
                                </div>
                                <div class="color_option">
                                    <span>Secondary</span>
                                    <span class="single-color" id="color_2"
                                        style="background-color: blueviolet;"></span>
                                </div>
                                <div class="color_option">
                                    <span>Color #3</span>
                                    <span class="single-color" id="color_3" style="background-color: red;"></span>
                                </div>
                                <div class="color_option">
                                    <span>Color #4</span>
                                    <span class="single-color" id="color_4" style="background-color: green;"></span>
                                </div>
                                <div class="color_option">
                                    <span>Color #5</span>
                                    <span class="single-color" id="color_4"
                                        style="background-color: lightblue;"></span>
                                </div>
                                <div class="color_option">
                                    <span>Color #6</span>
                                    <span class="single-color" id="color_4"
                                        style="background-color: lightpink;"></span>
                                </div>
                                <div class="color_option">
                                    <span>Color #7</span>
                                    <span class="single-color" id="color_4" style="background-color: gold;"></span>
                                </div>
                                <div class="color_option">
                                    <span>Color #8</span>
                                    <span class="single-color" id="color_4"
                                        style="background-color: rgb(34, 134, 174);"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content_part_1" onclick="show_content_part_sub(this)">
                        <span>Texts</span>
                        <span class="center_flex">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </div>
                    <div class="content_part_1_sub" style="display:none;overflow:scroll;height:100vh;">
                        <div>
                            <div style="display:flex;justify-content:space-between;padding: 15px 20px;">
                                <div style="display:flex;align-items:center;gap:10px;cursor:pointer;" onclick="">
                                    <span><i class="fa-solid fa-angle-left"></i></span>
                                    <span>Texts</span>
                                </div>
                                <div style="display:flex;align-items:center;gap:10px;">
                                    <span><i class="fa-solid fa-ellipsis" style="font-size:20px;"></i></span>
                                    <span><i class="fa-solid fa-question" style="font-size:20px;"></i></span>
                                    <span onclick="hide_content(this,4,-1)" style="cursor: pointer;"><i
                                            class="fa-solid fa-xmark" style="font-size:20px;"></i></span>
                                </div>
                            </div>
                            <div>
                                <div class="text_option_container">
                                    <div class="text_option" onclick="show_content(this,1,1)">
                                        <span>Default Text</span>
                                        <span
                                            style="height:100%;width:25px;display:flex;align-items:center;justify-content:center;">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <div class="text_styles" style="display:none;">
                                        <p>Global text example</p>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="arial">Arial</option>
                                                <option value="times new roman">Times New Roman</option>
                                                <option value="Thomas">Thomas</option>
                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Size</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="23">23</option>
                                                <option value="28">28</option>
                                                <option value="30">30</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Color</label>
                                            <div
                                                style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Format</label>
                                            <div style="width:50%;display:flex;justify-content:end;gap:10px;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-bold"></i>
                                                </span>
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-italic"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Link Text</label>
                                            <div
                                                style="width:50%;display:flex;justify-content:end;gap:10px;align-items:center;height:100%;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-underline"></i>
                                                </span>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Weight</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="normal">Normal</option>
                                                <option value="bold">Bold</option>
                                                <option value="bolder">Bolder</option>
                                                <option value="boldest">Boldest</option>
                                                <option value="medium">Medium</option>
                                                <option value="semi bold">Semi Bold</option>

                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;">
                                            <label for="" style="width:50%;">Line Height</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="Single">Single</option>
                                                <option value="1.5">1.5</option>
                                                <option value="Double">Double</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr style="height: 1px;color:gray;">
                                </div>
                                <div class="text_option_container">
                                    <div class="text_option" onclick="show_content(this,1,1)">
                                        <span>Paragraph</span>
                                        <span
                                            style="height:100%;width:25px;display:flex;align-items:center;justify-content:center;">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <div class="text_styles" style="display:none;">
                                        <p>Paragraph Example</p>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="arial">Arial</option>
                                                <option value="times new roman">Times New Roman</option>
                                                <option value="Thomas">Thomas</option>
                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Size</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="23">23</option>
                                                <option value="28">28</option>
                                                <option value="30">30</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Color</label>
                                            <div
                                                style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Format</label>
                                            <div style="width:50%;display:flex;justify-content:end;gap:10px;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-bold"></i>
                                                </span>
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-italic"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Link Text</label>
                                            <div
                                                style="width:50%;display:flex;justify-content:end;gap:10px;align-items:center;height:100%;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-underline"></i>
                                                </span>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Weight</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="normal">Normal</option>
                                                <option value="bold">Bold</option>
                                                <option value="bolder">Bolder</option>
                                                <option value="boldest">Boldest</option>
                                                <option value="medium">Medium</option>
                                                <option value="semi bold">Semi Bold</option>

                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Line Height</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="Single">Single</option>
                                                <option value="1.5">1.5</option>
                                                <option value="Double">Double</option>
                                            </select>
                                        </div>
                                        <div style="">
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Line Spacing</label>
                                                <label for="" style="width:70%;">Custom</label>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <select name="" id="" style="padding:3px;width:30%;">
                                                    <option value="Single">Auto</option>
                                                    <option value="1.5">Narrow</option>
                                                    <option value="Double">Wide</option>
                                                </select>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;">

                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">

                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">All Caps</span>
                                            </label>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">Text Shadow</span>
                                            </label>
                                        </div>
                                        <div class="text-shadow--sub">
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                                <label for="" style="width:50%;">Font Color</label>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Blur</label>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;outline:none;border:1px solid gray;">

                                                </div>
                                            </div>
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                                <label for="" style="width:50%;">Position</label>
                                                <div style="width:50%;">
                                                    position box
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="height: 1px;color:gray;">
                                </div>
                                <div class="text_option_container">
                                    <div class="text_option" onclick="show_content(this,1,1)">
                                        <span>Heading 1</span>
                                        <span
                                            style="height:100%;width:25px;display:flex;align-items:center;justify-content:center;">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <div class="text_styles" style="display:none;">
                                        <h1>HEADING 1 EXAMPLE</h1>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="arial">Arial</option>
                                                <option value="times new roman">Times New Roman</option>
                                                <option value="Thomas">Thomas</option>
                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Size</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="23">23</option>
                                                <option value="28">28</option>
                                                <option value="30">30</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Color</label>
                                            <div
                                                style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Format</label>
                                            <div style="width:50%;display:flex;justify-content:end;gap:10px;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-bold"></i>
                                                </span>
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-italic"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Link Text</label>
                                            <div
                                                style="width:50%;display:flex;justify-content:end;gap:10px;align-items:center;height:100%;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-underline"></i>
                                                </span>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Weight</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="normal">Normal</option>
                                                <option value="bold">Bold</option>
                                                <option value="bolder">Bolder</option>
                                                <option value="boldest">Boldest</option>
                                                <option value="medium">Medium</option>
                                                <option value="semi bold">Semi Bold</option>

                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Line Height</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="Single">Single</option>
                                                <option value="1.5">1.5</option>
                                                <option value="Double">Double</option>
                                            </select>
                                        </div>
                                        <div style="margin-bottom:15px;">
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Line Spacing</label>
                                                <label for="" style="width:70%;">Custom</label>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <select name="" id="" style="padding:3px;width:30%;">
                                                    <option value="Single">Auto</option>
                                                    <option value="1.5">Narrow</option>
                                                    <option value="Double">Wide</option>
                                                </select>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;">

                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">

                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">All Caps</span>
                                            </label>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">Text Shadow</span>
                                            </label>
                                        </div>
                                        <div class="text-shadow--sub">
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                                <label for="" style="width:50%;">Font Color</label>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Blur</label>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;outline:none;border:1px solid gray;">

                                                </div>
                                            </div>
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;margin-top:15px;">
                                                <label for="" style="width:50%;">Position</label>
                                                <div style="width:50%;display:flex;justify-content:end;">
                                                    <div
                                                        style="height:68px;width:68px;border:1px solid red;position:relative;">
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0;top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(-45deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translateX(-50%);top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(45deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;transform: translateY(-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-90"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(135deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translateX(-50%);bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-180"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0%;bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(-135deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0%;transform: translateY(-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-270"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translate(-50%,-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="height: 1px;color:gray;">
                                </div>
                                <div class="text_option_container">
                                    <div class="text_option" onclick="show_content(this,1,1)">
                                        <span>Heading 2</span>
                                        <span
                                            style="height:100%;width:25px;display:flex;align-items:center;justify-content:center;">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <div class="text_styles" style="display:none;">
                                        <h2>HEADING 2 EXAMPLE</h2>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="arial">Arial</option>
                                                <option value="times new roman">Times New Roman</option>
                                                <option value="Thomas">Thomas</option>
                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Size</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="23">23</option>
                                                <option value="28">28</option>
                                                <option value="30">30</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Color</label>
                                            <div
                                                style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Format</label>
                                            <div style="width:50%;display:flex;justify-content:end;gap:10px;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-bold"></i>
                                                </span>
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-italic"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Link Text</label>
                                            <div
                                                style="width:50%;display:flex;justify-content:end;gap:10px;align-items:center;height:100%;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-underline"></i>
                                                </span>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Weight</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="normal">Normal</option>
                                                <option value="bold">Bold</option>
                                                <option value="bolder">Bolder</option>
                                                <option value="boldest">Boldest</option>
                                                <option value="medium">Medium</option>
                                                <option value="semi bold">Semi Bold</option>

                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Line Height</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="Single">Single</option>
                                                <option value="1.5">1.5</option>
                                                <option value="Double">Double</option>
                                            </select>
                                        </div>
                                        <div style="margin-bottom:15px;">
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Line Spacing</label>
                                                <label for="" style="width:70%;">Custom</label>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <select name="" id="" style="padding:3px;width:30%;">
                                                    <option value="Single">Auto</option>
                                                    <option value="1.5">Narrow</option>
                                                    <option value="Double">Wide</option>
                                                </select>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;">

                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">

                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">All Caps</span>
                                            </label>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">Text Shadow</span>
                                            </label>
                                        </div>
                                        <div class="text-shadow--sub">
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                                <label for="" style="width:50%;">Font Color</label>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Blur</label>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;outline:none;border:1px solid gray;">

                                                </div>
                                            </div>
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;margin-top:15px;">
                                                <label for="" style="width:50%;">Position</label>
                                                <div style="width:50%;display:flex;justify-content:end;">
                                                    <div
                                                        style="height:68px;width:68px;border:1px solid red;position:relative;">
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0;top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(-45deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translateX(-50%);top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(45deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;transform: translateY(-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-90"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(135deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translateX(-50%);bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-180"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0%;bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(-135deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0%;transform: translateY(-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-270"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translate(-50%,-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="height: 1px;color:gray;">
                                </div>
                                <div class="text_option_container">
                                    <div class="text_option" onclick="show_content(this,1,1)">
                                        <span>Heading 3</span>
                                        <span
                                            style="height:100%;width:25px;display:flex;align-items:center;justify-content:center;">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <div class="text_styles" style="display:none;">
                                        <h3>HEADING 3 EXAMPLE</h3>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="arial">Arial</option>
                                                <option value="times new roman">Times New Roman</option>
                                                <option value="Thomas">Thomas</option>
                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Size</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="23">23</option>
                                                <option value="28">28</option>
                                                <option value="30">30</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Color</label>
                                            <div
                                                style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Format</label>
                                            <div style="width:50%;display:flex;justify-content:end;gap:10px;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-bold"></i>
                                                </span>
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-italic"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Link Text</label>
                                            <div
                                                style="width:50%;display:flex;justify-content:end;gap:10px;align-items:center;height:100%;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-underline"></i>
                                                </span>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Weight</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="normal">Normal</option>
                                                <option value="bold">Bold</option>
                                                <option value="bolder">Bolder</option>
                                                <option value="boldest">Boldest</option>
                                                <option value="medium">Medium</option>
                                                <option value="semi bold">Semi Bold</option>

                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Line Height</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="Single">Single</option>
                                                <option value="1.5">1.5</option>
                                                <option value="Double">Double</option>
                                            </select>
                                        </div>
                                        <div style="margin-bottom:15px;">
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Line Spacing</label>
                                                <label for="" style="width:70%;">Custom</label>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <select name="" id="" style="padding:3px;width:30%;">
                                                    <option value="Single">Auto</option>
                                                    <option value="1.5">Narrow</option>
                                                    <option value="Double">Wide</option>
                                                </select>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;">

                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">

                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">All Caps</span>
                                            </label>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">Text Shadow</span>
                                            </label>
                                        </div>
                                        <div class="text-shadow--sub">
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                                <label for="" style="width:50%;">Font Color</label>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Blur</label>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;outline:none;border:1px solid gray;">

                                                </div>
                                            </div>
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;margin-top:15px;">
                                                <label for="" style="width:50%;">Position</label>
                                                <div style="width:50%;display:flex;justify-content:end;">
                                                    <div
                                                        style="height:68px;width:68px;border:1px solid red;position:relative;">
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0;top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(-45deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translateX(-50%);top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(45deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;transform: translateY(-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-90"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(135deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translateX(-50%);bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-180"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0%;bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(-135deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0%;transform: translateY(-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-270"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translate(-50%,-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="height: 1px;color:gray;">
                                </div>
                                <div class="text_option_container">
                                    <div class="text_option" onclick="show_content(this,1,1)">
                                        <span>Heading 4</span>
                                        <span
                                            style="height:100%;width:25px;display:flex;align-items:center;justify-content:center;">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <div class="text_styles" style="display:none;">
                                        <h4>HEADING 4 EXAMPLE</h4>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="arial">Arial</option>
                                                <option value="times new roman">Times New Roman</option>
                                                <option value="Thomas">Thomas</option>
                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Size</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="23">23</option>
                                                <option value="28">28</option>
                                                <option value="30">30</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                                <option value="23">23</option>
                                            </select>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Color</label>
                                            <div
                                                style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Format</label>
                                            <div style="width:50%;display:flex;justify-content:end;gap:10px;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-bold"></i>
                                                </span>
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-italic"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Link Text</label>
                                            <div
                                                style="width:50%;display:flex;justify-content:end;gap:10px;align-items:center;height:100%;">
                                                <span
                                                    style="border:1px solid gray;padding:3px 10px;border-radius:5px;display:inline-block;">
                                                    <i class="fa-solid fa-underline"></i>
                                                </span>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Font Weight</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="normal">Normal</option>
                                                <option value="bold">Bold</option>
                                                <option value="bolder">Bolder</option>
                                                <option value="boldest">Boldest</option>
                                                <option value="medium">Medium</option>
                                                <option value="semi bold">Semi Bold</option>

                                            </select>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label for="" style="width:50%;">Line Height</label>
                                            <select name="" id="" style="padding:3px;width:50%;">
                                                <option value="Single">Single</option>
                                                <option value="1.5">1.5</option>
                                                <option value="Double">Double</option>
                                            </select>
                                        </div>
                                        <div style="margin-bottom:15px;">
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Line Spacing</label>
                                                <label for="" style="width:70%;">Custom</label>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <select name="" id="" style="padding:3px;width:30%;">
                                                    <option value="Single">Auto</option>
                                                    <option value="1.5">Narrow</option>
                                                    <option value="Double">Wide</option>
                                                </select>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;">

                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">

                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">All Caps</span>
                                            </label>
                                        </div>
                                        <div style="display:flex;align-items:center;margin-bottom:15px;">
                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">Text Shadow</span>
                                            </label>
                                        </div>
                                        <div class="text-shadow--sub">
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;">
                                                <label for="" style="width:50%;">Font Color</label>
                                                <div
                                                    style="background-color: goldenrod;padding:3px;width:30px;height:30px;border-radius:5px;">
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:10px;">
                                                <label for="" style="width:30%;">Blur</label>
                                                <div style="width:70%;display:flex;gap:10px;">

                                                    <input type="range" name="" id=""
                                                        style="width:70%;">
                                                    <input type="text" placeholder="00"
                                                        style="text-align:center;width:30%;padding:3px;border-radius:8px;outline:none;border:1px solid gray;">

                                                </div>
                                            </div>
                                            <div
                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:15px;margin-top:15px;">
                                                <label for="" style="width:50%;">Position</label>
                                                <div style="width:50%;display:flex;justify-content:end;">
                                                    <div
                                                        style="height:68px;width:68px;border:1px solid red;position:relative;">
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0;top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(-45deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translateX(-50%);top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;top:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(45deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;transform: translateY(-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-90"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;right:0;bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(135deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translateX(-50%);bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-180"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0%;bottom:0;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up"
                                                                style="transform: rotate(-135deg)"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:0%;transform: translateY(-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-caret-up fa-rotate-270"></i>
                                                        </div>
                                                        <div
                                                            style="display:flex;align-items:center;justify-content:center;position: absolute;left:50%;transform: translate(-50%,-50%);top:50%;height:20px;width:20px;background:orange;">
                                                            <i class="fa-solid fa-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="height: 1px;color:gray;">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_part_1">
                    <span>Buttons</span>
                    <span class="center_flex">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </div>
                <div class="content_part_1">
                    <span>Images</span>
                    <span class="center_flex">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </div>
                <div class="content_part_1">
                    <span>Rows and Columns</span>
                    <span class="center_flex">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </div>
                <div class="content_part_1">
                    <span>Background</span>
                    <span class="center_flex">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </div>
                <div class="content_part_1">
                    <span>Site Layout</span>
                    <span class="center_flex">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </div>

            </div>

        </div>
    </div>
    <div class="parent" onclick="showChild_(this)">
        <div class="icon">
            <i class="fa-regular fa-file-lines"></i>
            <small>PAGES</small>
        </div>
        <div class="content" style="display:none;">
            pages
        </div>
    </div>
    <div class="parent">
        <div class="icon">
            <i class="fa-solid fa-plus"></i>
            <small>WIDGETS</small>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="parent">
        <div class="icon">
            <i class="fa-regular fa-folder"></i>
            <small>CONTENT</small>
        </div>
        <div class="content" style="display:none;">
        </div>
    </div>
    <div class="parent">
        <div class="icon">

            <i class="fa-solid fa-arrow-trend-up"></i>
            <small>PERSONALIZE</small>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="parent">
        <div class="icon">
            <i class="fa-solid fa-cart-shopping"></i>
            <small>ECOMMERCE</small>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="parent">
        <div class="icon">
            <i class="fa-solid fa-user-check"></i>
            <small>MEMVERSHIP</small>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="parent">
        <div class="icon">

            <i class="fa-regular fa-comment"></i>
            <small>BLOG</small>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="parent">
        <div class="icon">

            <i class="fa-solid fa-puzzle-piece"></i>
            <small>APP STORE</small>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="parent">
        <div class="icon">

            <i class="fa-solid fa-gear"></i>
            <small>SEO & SETTINGS</small>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
</div>
<script>
    const show_content = (tag, parentNo, childrenNo) => {
        let child = tag.parentNode;
        console.log(child);
        for (let i = 1; i < parentNo; i++) {
            child = child.parentNode;
        }
        if (childrenNo == -1) {

            child.style.display === 'none' ? child.style.display = '' : child.style.display = 'none';
        } else {
            child.children[childrenNo].style.display === 'none' ? child.children[childrenNo].style.display = '' :
                child.children[childrenNo].style.display = 'none';
        }
    }

    const hide_content = (tag, parentNo, childrenNo) => {
        let child = tag.parentNode;
        for (let i = 1; i < parentNo; i++) {
            child = child.parentNode;
        }
        if (childrenNo == -1) {

            child.style.display === 'none' ? child.style.display = '' : child.style.display = 'none';
        } else {
            child.children[childrenNo].style.display === 'none' ? child.children[childrenNo].style.display = '' :
                child.children[childrenNo].style.display = 'none';
        }
    }
    const show_content_part_sub = (tag) => {
        let child = tag.parentNode.children[1];

        child.style.display === 'none' ? child.style.display = '' : child.style.display = 'none';

    }
    const showChild_ = (tag) => {
        let child = tag.parentNode.children[1];
        let contents = document.querySelectorAll('.sidebar___ .parent .content');
        contents = Array.from(contents);
        contents.forEach(element => {
            if (element !== child) {
                element.style.display = 'none';
            }
        });
        console.log((child.style.display));
        child.style.display === 'none' ? child.style.display = '' : child.style.display = 'none';

    }
</script>
