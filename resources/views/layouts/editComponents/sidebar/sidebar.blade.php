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
                <div class="content_part_1" onclick="show_content_part_sub(this)">
                    <span>Colors</span>
                    <span class="center_flex">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </div>
                <div class="content_part_1_sub" style="display:none;">
                    <div>
                        <div style="display:flex;justify-content:space-between;padding: 15px 20px;">
                            <div style="display:flex;align-items:center;gap:10px;">
                                <span><i class="fa-solid fa-angle-left"></i></span>
                                <span>Colors</span>
                            </div>
                            <div style="display:flex;align-items:center;gap:10px;">
                                <span><i class="fa-solid fa-ellipsis" style="font-size:20px;"></i></span>
                                <span><i class="fa-solid fa-question" style="font-size:20px;"></i></span>
                                <span onclick="hide_content(this,4,-1)" style="cursor: pointer;"><i class="fa-solid fa-xmark"
                                        style="font-size:20px;"></i></span>
                            </div>
                        </div>
                        <div>
                            <div class="color_option">
                                <span>Primary</span>
                                <span class="single-color" id="color_1" style="background-color: goldenrod;"></span>
                            </div>
                            <div class="color_option">
                                <span>Secondary</span>
                                <span class="single-color" id="color_2" style="background-color: blueviolet;"></span>
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
                                <span class="single-color" id="color_4" style="background-color: lightblue;"></span>
                            </div>
                            <div class="color_option">
                                <span>Color #6</span>
                                <span class="single-color" id="color_4" style="background-color: lightpink;"></span>
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
                <div class="content_part_1">
                    <span>Texts</span>
                    <span class="center_flex">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
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
    const hide_content = (tag, parentNo, childrenNo) => {
        let child = tag.parentNode;
        for (let i = 1; i < parentNo; i++) {
            child = child.parentNode;
        }
        if(childrenNo==-1){

            child.style.display === 'none' ? child.style.display = '' : child.style.display = 'none';
        }else{
            child.children[childrenNo].style.display === 'none' ? child.children[childrenNo].style.display = '' : child.children[childrenNo].style.display = 'none';
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
