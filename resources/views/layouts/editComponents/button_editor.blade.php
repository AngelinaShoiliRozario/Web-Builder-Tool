<div style="height: 500px;background:#f2f2f2;color:#2f373a;width:350px;padding:0px;z-index:4000;">
    <nav style="background:#2f373a;color:white;padding:10px;">
        <span
            style="cursor:pointer;text-transform:uppercase;padding:5px;color:tomato;border:1px solid tomato;">Content</span>
        <span style="cursor:pointer;text-transform:uppercase;padding:5px;">Design</span>
    </nav>
    <div class="button_content" style="height:100%;display:none;">
        <h3
            style="text-align: center;text-transform:uppercase;border-top:1px solid gray;background:#2f373a;color:white;padding:10px;margin-bottom:0px!important;">
            Button Content</h3>
        <div style="height:100%;overflow:scroll!important;padding:15px;">
            <div class="content">
                <div class="box1" style="background: white;padding:20px;margin-bottom:10px;">
                    <label for="">Text On button</label>
                    <input type="text" value="Content" style="width:100%;padding:3px;">
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
    <div class="button_design">
        <h3
            style="text-align: center;text-transform:uppercase;border-top:2px solid gray;background:#2f373a;color:white;padding:10px;margin-bottom:0px!important;">
            Button Design</h3>
        <nav style="display:flex;border-bottom:1px solid gray;padding:8px;">
            <span style="width: 25%;text-align:center;">Layout</span>
            <span style="width: 25%;text-align:center;">Style</span>
            <span style="width: 25%;text-align:center;">Annimation</span>
            <span style="width: 25%;text-align:center;">Spacing</span>
        </nav>
        <div class="layout" style="padding:10px;cursor:pointer;">
            <div style="background: white;display:flex;align-items:center;justify-content:center;padding:15px;">
                <span style="background: #6f8188;padding:10px 40px;border-radius:8px;color:white;">Button</span>
                <span style="margin-left:50px;">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
            </div>
        </div>
        <div class="style" style="padding:10px;">
            <div class="button_style"></div>
            <div class="button_text" style="background: white;padding:15px;">
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
                    <select name="" id="" style="width:60%;padding:3px;">
                        @for ($i = 5; $i < 90; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div style="display: flex;justify-content:space-between;margin-top:8px;">
                    <label for="" style="width:30%;">Font Color</label>
                    <div style="height: 25px;width:25px;border-radius:50%;border:1.5px solid gray;background:white;">
                    </div>
                </div>
                <div style="display: flex;justify-content:space-between;margin-top:8px;">
                    <label for="" style="width:30%;">Font Format</label>
                    <div>
                        <span style="padding:8px 13px;background:#f2f2f2;"><i class="fa-solid fa-bold"></i></span>
                        <span style="padding:8px 13px;background:#f2f2f2;"><i
                                class="fa-solid fa-underline"></i></span>
                        <span style="padding:8px 13px;background:#f2f2f2;"><i class="fa-solid fa-italic"></i></span>

                    </div>
                </div>
                <div style="display: flex;justify-content:space-between;margin-top:8px;">
                    <label for="" style="width:30%;">Font Alignment</label>
                    <div>
                        <span style="padding:8px 13px;background:#f2f2f2;"><i class="fa-solid fa-bold"></i></span>
                        <span style="padding:8px 13px;background:#f2f2f2;"><i
                                class="fa-solid fa-underline"></i></span>
                        <span style="padding:8px 13px;background:#f2f2f2;"><i class="fa-solid fa-italic"></i></span>

                    </div>
                </div>
                
            </div>
        </div>
        <div class="animation">

        </div>
        <div class="spacing">

        </div>
    </div>
</div>
<script>
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
</script>
