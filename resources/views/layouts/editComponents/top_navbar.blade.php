
<div style="height:100%;display:flex;justify-content:space-around;align-items:center;">
    <div class="left">
        Logo
    </div>
    <div class="center" style="display:flex;gap:10px;align-items:center;">
        <div style="position:relative;">
            <span style="cursor: pointer;"
                onclick="document.querySelector('#_section_info_id_').style.display=='none' ? document.querySelector('#_section_info_id_').style.display='' : document.querySelector('#_section_info_id_').style.display='none'">
                Section information</span>
                <div id="_section_info_id_"
                    style="position: absolute;top:45px;;width:250px!important;left:0px;background:white;box-shadow:0 0 5px gray;color:black;padding:5px 15px;display:none;">
                    <ul>
                        <li style="padding:5px;">
                            Home
                            <ol> 
                                <li style="padding:5px;">Sub Item</li>
                                <li style="padding:5px;">Sub Item</li>
                                <li style="padding:5px;">Sub Item</li>
                                <li style="padding:5px;">Sub Item</li>
                            </ol>
                        </li>
                        <li style="padding:5px;">Services
                            <ol>
                                <li style="padding:5px;">Sub Item</li>
                                <li style="padding:5px;">Sub Item</li>
                                <li style="padding:5px;"> Sub Item</li>
                                <li style="padding:5px;">Sub Item</li>
                            </ol>
                        </li>
                        <li style="padding:5px;">About
                            <ol>
                                <li style="padding:5px;">Sub Item</li>
                                <li style="padding:5px;">Sub Item</li>
                                <li style="padding:5px;">Sub Item</li>
                                <li style="padding:5px;">Sub Item</li>
                            </ol>
                        </li>
                    </ul>
                </div>
        </div>
        <span style="background-color: white;color:black;padding:9px 12px;border-radius:10px;cursor:pointer;"><i
                class="fa-solid fa-mobile-screen" style="font-size: 20px;"></i></span>
        <span style="background-color: white;color:black;padding:9px 12px;border-radius:10px;cursor:pointer;"><i
                class="fa-solid fa-tablet-screen-button" style="font-size: 20px;"></i></span>
        <span style="background-color: white;color:black;padding:9px 12px;border-radius:10px;cursor:pointer;"><i
                class="fa-solid fa-display" style="font-size: 20px;"></i></span>
    </div>
    <div class="right" style="height:100%;display:flex;align-items:center;gap:10px;">
        <span style="background: white;padding:5px 10px;border-radius:5px;color:black;">Preview</span>
        <span style="background: white;padding:5px 10px;border-radius:5px;color:black;">Editor Mode</span>
        <span style="background: white;padding:5px 10px;border-radius:5px;color:black;">Publish</span>
        <span style="background: white;padding:5px 10px;border-radius:5px;color:black;">Save</span>
    </div>
</div>
