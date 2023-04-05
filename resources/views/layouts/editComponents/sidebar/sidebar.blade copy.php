<div data-component="sidebar">
    <div class="">
        <ul class="list-group flex-column  first-menu">

            <!-- Theme list start -->
            <li class="" style="position: relative;">
                <div style="text-align: center;background:yellow;cursor:pointer;" onclick="openSubContent(this)">
                    <i class="fa-solid fa-palette"></i>
                    <br />
                    <span class="align-middle">
                        <small>THEME</small>
                    </span>
                </div>

                <ul class="submenu" style="width:400px;padding:20px;z-index:5000;background:#144439;">
                    <div style="display:flex;justify-content:end;">
                        <i class="fa-solid fa-xmark" style="cursor:pointer;border:1px solid gray;padding:3px 5px;"></i>
                    </div>
                    <li class="submenu-head">
                        <p>SITE THEME</p>
                        <p>
                            <i class="fa-regular fa-circle-question"></i>
                        </p>
                    </li>

                    <!-- Theme color  -->
                    <li class="px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>COLORS</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>

                            <ul class="list-group flex-column d-inline-block sub-submenu">
                                <li class="sub-submenu-head">
                                    <p>COLORS</p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                                        </svg>
                                    </p>
                                </li>
                                <li class="px-2 py-2 color-menu">
                                    <a href="#" class="">
                                        <p>Primary</p>
                                        <div class="single-color" id="color_1"></div>
                                    </a>
                                </li>
                                <li class=" px-2 py-2 color-menu">
                                    <a href="#" class="">
                                        <p>Secondary</p>
                                        <div class="single-color" id="color_2"></div>
                                    </a>
                                </li>
                                <li class=" px-2 py-2 color-menu">
                                    <a href="#" class="">
                                        <p>Color #3</p>
                                        <div class="single-color" id="color_3"></div>
                                    </a>
                                </li>
                                <li class=" px-2 py-2 color-menu">
                                    <a href="#" class="">
                                        <p>Color #4</p>
                                        <div class="single-color" id="color_4"></div>
                                    </a>
                                </li>
                                <li class=" px-2 py-2 color-menu">
                                    <a href="#" class="">
                                        <p>Color #5</p>
                                        <div class="single-color" id="color_5"></div>
                                    </a>
                                </li>
                                <li class=" px-2 py-2 color-menu">
                                    <a href="#" class="">
                                        <p>Color #6</p>
                                        <div class="single-color" id="color_6"></div>
                                    </a>
                                </li>
                                <li class=" px-2 py-2 color-menu">
                                    <a href="#" class="">
                                        <p>Color #7</p>
                                        <div class="single-color" id="color_7"></div>
                                    </a>
                                </li>
                                <li class=" px-2 py-2 color-menu">
                                    <a href="#" class="">
                                        <p>Color #8</p>
                                        <div class="single-color" id="color_8">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z" />
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </a>
                    </li>

                    <!-- Theme Text  -->
                    <li class=" px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>TEXT</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>

                            <ul class="list-group flex-column d-inline-block sub-submenu">
                                <li class="sub-submenu-head">
                                    <p>TEXT</p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                                        </svg>
                                    </p>
                                </li>

                                <li style="border-bottom:1px solid gray;" class=" color-menu " onclick="openInnerTextBox(this)">
                                    <a href="#" class=" ">
                                        <p>Default Text</p>
                                        <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                            </svg></p>
                                    </a>
                                    <div style="background-color: white;" class="">
                                        Display Block
                                    </div>
                                </li>

                                <li style="border-bottom:1px solid gray" class=" color-menu">
                                    <div onclick="openInnerTextBox(this)">
                                        <a href="#" class=" ">
                                            <p>Default Text</p>
                                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></p>
                                        </a>
                                    </div>
                                    <div style="background-color: white;" class=" ">
                                        <span style="font-size: 20px; color: #144439;">Global text example</span>
                                        <div class="fontFamilyDrop">
                                            <span>Font:</span>
                                            <select name="fontFamily" id="fontFamily">
                                                <option class="fontOption" value="">Abril Falface</option>
                                                <option value="Alegreya">Alegreya</option>
                                                <option value="Amiri">Amiri</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Barlow">Barlow</option>
                                                <option value="Vietnam">Be Vietnam</option>
                                                <option value="BEBAS-NEUE">BEBAS NEUE</option>
                                                <option value="Comfortaa">Comfortaa</option>
                                                <option value="Dancing-Scrip">Dancing Script</option>
                                                <option value="">DM Sans</option>
                                                <option value="">DM Serif Display</option>
                                                <option value="">Droid Sans</option>
                                                <option value="">Droid Sans Mono</option>
                                                <option value="">Droid Serif</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Fjalla-One">Fjalla One</option>
                                                <option value="Fraunces">Fraunces</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Heebo">Heebo</option>
                                                <option value="Helvetica">Helvetica</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Jost">Jost</option>
                                                <option value="Lato">Lato</option>
                                                <option value="Merriweather">Merriweather</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Muli">Muli</option>
                                                <option value="Mulish">Mulish</option>
                                                <option value="">Noto Sans</option>
                                                <option value="">Noto Serif</option>
                                                <option value="">Nunito Sans</option>
                                                <option value="">Ond Standard TT</option>
                                                <option value="">Open Sans</option>
                                                <option value="Oswald">Oswald</option>
                                                <option value="Pelil-Format-Script">Pelil Format Script</option>
                                                <option value="Playfair-Display">Playfair Display</option>
                                                <option value="Poppins">Poppins</option>
                                                <option value="Prata">Prata</option>
                                                <option value="Prompt">Prompt</option>
                                                <option value="PT-Sans">PT Sans</option>
                                                <option value="Quicksand">Quicksand</option>
                                                <option value="Raleway">Raleway</option>
                                                <option value="Red-Rose">Red Rose</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="Roboto-Mono">Roboto Mono</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font size:</span>
                                            <select name="fontSize" id="fontSize">
                                                <option class="fontSizeOption" value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="72">72</option>
                                                <option value="96">96</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 ml-1">I</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Link text</span>
                                            <div style="display: flex; align-items: center;" class="FontFormat">
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                                <div class="color-point ml-1"></div>
                                                <!-- <p style="font-style: italic;" class="p-1 ml-1">I</p> -->
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li style="border-bottom:1px solid gray" class=" color-menu">
                                    <div onclick="openInnerTextBox(this)">
                                        <a href="#" class=" ">
                                            <p>Paragraph</p>
                                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></p>
                                        </a>
                                    </div>

                                    <div style="background-color: white;" class=" pb-2 ">
                                        <span style="font-size: 20px; color: #144439;">Paragraph example</span>
                                        <div class="fontFamilyDrop">
                                            <span>Font:</span>
                                            <select name="fontFamily" id="fontFamily">
                                                <option class="fontOption" value="">Abril Falface</option>
                                                <option value="Alegreya">Alegreya</option>
                                                <option value="Amiri">Amiri</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Barlow">Barlow</option>
                                                <option value="Vietnam">Be Vietnam</option>
                                                <option value="BEBAS-NEUE">BEBAS NEUE</option>
                                                <option value="Comfortaa">Comfortaa</option>
                                                <option value="Dancing-Scrip">Dancing Script</option>
                                                <option value="">DM Sans</option>
                                                <option value="">DM Serif Display</option>
                                                <option value="">Droid Sans</option>
                                                <option value="">Droid Sans Mono</option>
                                                <option value="">Droid Serif</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Fjalla-One">Fjalla One</option>
                                                <option value="Fraunces">Fraunces</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Heebo">Heebo</option>
                                                <option value="Helvetica">Helvetica</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Jost">Jost</option>
                                                <option value="Lato">Lato</option>
                                                <option value="Merriweather">Merriweather</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Muli">Muli</option>
                                                <option value="Mulish">Mulish</option>
                                                <option value="">Noto Sans</option>
                                                <option value="">Noto Serif</option>
                                                <option value="">Nunito Sans</option>
                                                <option value="">Ond Standard TT</option>
                                                <option value="">Open Sans</option>
                                                <option value="Oswald">Oswald</option>
                                                <option value="Pelil-Format-Script">Pelil Format Script</option>
                                                <option value="Playfair-Display">Playfair Display</option>
                                                <option value="Poppins">Poppins</option>
                                                <option value="Prata">Prata</option>
                                                <option value="Prompt">Prompt</option>
                                                <option value="PT-Sans">PT Sans</option>
                                                <option value="Quicksand">Quicksand</option>
                                                <option value="Raleway">Raleway</option>
                                                <option value="Red-Rose">Red Rose</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="Roboto-Mono">Roboto Mono</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font size:</span>
                                            <select name="fontSize" id="fontSize">
                                                <option class="fontSizeOption" value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="72">72</option>
                                                <option value="96">96</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 mx-1">I</p>
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                    </div>

                                </li>
                                <li style="border-bottom:1px solid gray" class=" color-menu">
                                    <div onclick="openInnerTextBox(this)">
                                        <a href="#" class=" ">
                                            <p>Heading 1</p>
                                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></p>
                                        </a>
                                    </div>
                                    <div style="background-color: white;" class=" pb-2 ">
                                        <h1 style="color: #144439;">H1 Example</h1>
                                        <div class="fontFamilyDrop">
                                            <span>Font:</span>
                                            <select name="fontFamily" id="fontFamily">
                                                <option class="fontOption" value="">Abril Falface</option>
                                                <option value="Alegreya">Alegreya</option>
                                                <option value="Amiri">Amiri</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Barlow">Barlow</option>
                                                <option value="Vietnam">Be Vietnam</option>
                                                <option value="BEBAS-NEUE">BEBAS NEUE</option>
                                                <option value="Comfortaa">Comfortaa</option>
                                                <option value="Dancing-Scrip">Dancing Script</option>
                                                <option value="">DM Sans</option>
                                                <option value="">DM Serif Display</option>
                                                <option value="">Droid Sans</option>
                                                <option value="">Droid Sans Mono</option>
                                                <option value="">Droid Serif</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Fjalla-One">Fjalla One</option>
                                                <option value="Fraunces">Fraunces</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Heebo">Heebo</option>
                                                <option value="Helvetica">Helvetica</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Jost">Jost</option>
                                                <option value="Lato">Lato</option>
                                                <option value="Merriweather">Merriweather</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Muli">Muli</option>
                                                <option value="Mulish">Mulish</option>
                                                <option value="">Noto Sans</option>
                                                <option value="">Noto Serif</option>
                                                <option value="">Nunito Sans</option>
                                                <option value="">Ond Standard TT</option>
                                                <option value="">Open Sans</option>
                                                <option value="Oswald">Oswald</option>
                                                <option value="Pelil-Format-Script">Pelil Format Script</option>
                                                <option value="Playfair-Display">Playfair Display</option>
                                                <option value="Poppins">Poppins</option>
                                                <option value="Prata">Prata</option>
                                                <option value="Prompt">Prompt</option>
                                                <option value="PT-Sans">PT Sans</option>
                                                <option value="Quicksand">Quicksand</option>
                                                <option value="Raleway">Raleway</option>
                                                <option value="Red-Rose">Red Rose</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="Roboto-Mono">Roboto Mono</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font size:</span>
                                            <select name="fontSize" id="fontSize">
                                                <option class="fontSizeOption" value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="72">72</option>
                                                <option value="96">96</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 mx-1">I</p>
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li style="border-bottom:1px solid gray" class=" color-menu">
                                    <div onclick="openInnerTextBox(this)">
                                        <a href="#" class=" ">
                                            <p>Heading 2</p>
                                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></p>
                                        </a>
                                    </div>
                                    <div style="background-color: white;" class=" pb-2 ">
                                        <h2 style=" color: #144439;">H2 Example</h2>
                                        <div class="fontFamilyDrop">
                                            <span>Font:</span>
                                            <select name="fontFamily" id="fontFamily">
                                                <option class="fontOption" value="">Abril Falface</option>
                                                <option value="Alegreya">Alegreya</option>
                                                <option value="Amiri">Amiri</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Barlow">Barlow</option>
                                                <option value="Vietnam">Be Vietnam</option>
                                                <option value="BEBAS-NEUE">BEBAS NEUE</option>
                                                <option value="Comfortaa">Comfortaa</option>
                                                <option value="Dancing-Scrip">Dancing Script</option>
                                                <option value="">DM Sans</option>
                                                <option value="">DM Serif Display</option>
                                                <option value="">Droid Sans</option>
                                                <option value="">Droid Sans Mono</option>
                                                <option value="">Droid Serif</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Fjalla-One">Fjalla One</option>
                                                <option value="Fraunces">Fraunces</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Heebo">Heebo</option>
                                                <option value="Helvetica">Helvetica</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Jost">Jost</option>
                                                <option value="Lato">Lato</option>
                                                <option value="Merriweather">Merriweather</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Muli">Muli</option>
                                                <option value="Mulish">Mulish</option>
                                                <option value="">Noto Sans</option>
                                                <option value="">Noto Serif</option>
                                                <option value="">Nunito Sans</option>
                                                <option value="">Ond Standard TT</option>
                                                <option value="">Open Sans</option>
                                                <option value="Oswald">Oswald</option>
                                                <option value="Pelil-Format-Script">Pelil Format Script</option>
                                                <option value="Playfair-Display">Playfair Display</option>
                                                <option value="Poppins">Poppins</option>
                                                <option value="Prata">Prata</option>
                                                <option value="Prompt">Prompt</option>
                                                <option value="PT-Sans">PT Sans</option>
                                                <option value="Quicksand">Quicksand</option>
                                                <option value="Raleway">Raleway</option>
                                                <option value="Red-Rose">Red Rose</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="Roboto-Mono">Roboto Mono</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font size:</span>
                                            <select name="fontSize" id="fontSize">
                                                <option class="fontSizeOption" value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="72">72</option>
                                                <option value="96">96</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 mx-1">I</p>
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li style="border-bottom:1px solid gray" class=" color-menu">
                                    <div onclick="openInnerTextBox(this)">
                                        <a href="#" class=" ">
                                            <p>Heading 3</p>
                                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></p>
                                        </a>
                                    </div>
                                    <div style="background-color: white;" class=" pb-2 ">
                                        <h3 style=" color: #144439;">H3 Example</h3>
                                        <div class="fontFamilyDrop">
                                            <span>Font:</span>
                                            <select name="fontFamily" id="fontFamily">
                                                <option class="fontOption" value="">Abril Falface</option>
                                                <option value="Alegreya">Alegreya</option>
                                                <option value="Amiri">Amiri</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Barlow">Barlow</option>
                                                <option value="Vietnam">Be Vietnam</option>
                                                <option value="BEBAS-NEUE">BEBAS NEUE</option>
                                                <option value="Comfortaa">Comfortaa</option>
                                                <option value="Dancing-Scrip">Dancing Script</option>
                                                <option value="">DM Sans</option>
                                                <option value="">DM Serif Display</option>
                                                <option value="">Droid Sans</option>
                                                <option value="">Droid Sans Mono</option>
                                                <option value="">Droid Serif</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Fjalla-One">Fjalla One</option>
                                                <option value="Fraunces">Fraunces</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Heebo">Heebo</option>
                                                <option value="Helvetica">Helvetica</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Jost">Jost</option>
                                                <option value="Lato">Lato</option>
                                                <option value="Merriweather">Merriweather</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Muli">Muli</option>
                                                <option value="Mulish">Mulish</option>
                                                <option value="">Noto Sans</option>
                                                <option value="">Noto Serif</option>
                                                <option value="">Nunito Sans</option>
                                                <option value="">Ond Standard TT</option>
                                                <option value="">Open Sans</option>
                                                <option value="Oswald">Oswald</option>
                                                <option value="Pelil-Format-Script">Pelil Format Script</option>
                                                <option value="Playfair-Display">Playfair Display</option>
                                                <option value="Poppins">Poppins</option>
                                                <option value="Prata">Prata</option>
                                                <option value="Prompt">Prompt</option>
                                                <option value="PT-Sans">PT Sans</option>
                                                <option value="Quicksand">Quicksand</option>
                                                <option value="Raleway">Raleway</option>
                                                <option value="Red-Rose">Red Rose</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="Roboto-Mono">Roboto Mono</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font size:</span>
                                            <select name="fontSize" id="fontSize">
                                                <option class="fontSizeOption" value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="72">72</option>
                                                <option value="96">96</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 mx-1">I</p>
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li style="border-bottom:1px solid gray" class=" color-menu">
                                    <div onclick="openInnerTextBox(this)">
                                        <a href="#" class=" ">
                                            <p>Heading 4</p>
                                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></p>
                                        </a>
                                    </div>
                                    <div style="background-color: white;" class=" pb-2 ">
                                        <h4 style="color: #144439;">H4 Example</h4>
                                        <div class="fontFamilyDrop">
                                            <span>Font:</span>
                                            <select name="fontFamily" id="fontFamily">
                                                <option class="fontOption" value="">Abril Falface</option>
                                                <option value="Alegreya">Alegreya</option>
                                                <option value="Amiri">Amiri</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Barlow">Barlow</option>
                                                <option value="Vietnam">Be Vietnam</option>
                                                <option value="BEBAS-NEUE">BEBAS NEUE</option>
                                                <option value="Comfortaa">Comfortaa</option>
                                                <option value="Dancing-Scrip">Dancing Script</option>
                                                <option value="">DM Sans</option>
                                                <option value="">DM Serif Display</option>
                                                <option value="">Droid Sans</option>
                                                <option value="">Droid Sans Mono</option>
                                                <option value="">Droid Serif</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Fjalla-One">Fjalla One</option>
                                                <option value="Fraunces">Fraunces</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Heebo">Heebo</option>
                                                <option value="Helvetica">Helvetica</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Jost">Jost</option>
                                                <option value="Lato">Lato</option>
                                                <option value="Merriweather">Merriweather</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Muli">Muli</option>
                                                <option value="Mulish">Mulish</option>
                                                <option value="">Noto Sans</option>
                                                <option value="">Noto Serif</option>
                                                <option value="">Nunito Sans</option>
                                                <option value="">Ond Standard TT</option>
                                                <option value="">Open Sans</option>
                                                <option value="Oswald">Oswald</option>
                                                <option value="Pelil-Format-Script">Pelil Format Script</option>
                                                <option value="Playfair-Display">Playfair Display</option>
                                                <option value="Poppins">Poppins</option>
                                                <option value="Prata">Prata</option>
                                                <option value="Prompt">Prompt</option>
                                                <option value="PT-Sans">PT Sans</option>
                                                <option value="Quicksand">Quicksand</option>
                                                <option value="Raleway">Raleway</option>
                                                <option value="Red-Rose">Red Rose</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="Roboto-Mono">Roboto Mono</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font size:</span>
                                            <select name="fontSize" id="fontSize">
                                                <option class="fontSizeOption" value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="72">72</option>
                                                <option value="96">96</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 mx-1">I</p>
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li style="border-bottom:1px solid gray" class=" color-menu">
                                    <div onclick="openInnerTextBox(this)">
                                        <a href="#" class=" ">
                                            <p>Heading 5</p>
                                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></p>
                                        </a>
                                    </div>
                                    <div style="background-color: white;" class=" pb-2 ">
                                        <h5 style="color: #144439;">H5 Example</h5>
                                        <div class="fontFamilyDrop">
                                            <span>Font:</span>
                                            <select name="fontFamily" id="fontFamily">
                                                <option class="fontOption" value="">Abril Falface</option>
                                                <option value="Alegreya">Alegreya</option>
                                                <option value="Amiri">Amiri</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Barlow">Barlow</option>
                                                <option value="Vietnam">Be Vietnam</option>
                                                <option value="BEBAS-NEUE">BEBAS NEUE</option>
                                                <option value="Comfortaa">Comfortaa</option>
                                                <option value="Dancing-Scrip">Dancing Script</option>
                                                <option value="">DM Sans</option>
                                                <option value="">DM Serif Display</option>
                                                <option value="">Droid Sans</option>
                                                <option value="">Droid Sans Mono</option>
                                                <option value="">Droid Serif</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Fjalla-One">Fjalla One</option>
                                                <option value="Fraunces">Fraunces</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Heebo">Heebo</option>
                                                <option value="Helvetica">Helvetica</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Jost">Jost</option>
                                                <option value="Lato">Lato</option>
                                                <option value="Merriweather">Merriweather</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Muli">Muli</option>
                                                <option value="Mulish">Mulish</option>
                                                <option value="">Noto Sans</option>
                                                <option value="">Noto Serif</option>
                                                <option value="">Nunito Sans</option>
                                                <option value="">Ond Standard TT</option>
                                                <option value="">Open Sans</option>
                                                <option value="Oswald">Oswald</option>
                                                <option value="Pelil-Format-Script">Pelil Format Script</option>
                                                <option value="Playfair-Display">Playfair Display</option>
                                                <option value="Poppins">Poppins</option>
                                                <option value="Prata">Prata</option>
                                                <option value="Prompt">Prompt</option>
                                                <option value="PT-Sans">PT Sans</option>
                                                <option value="Quicksand">Quicksand</option>
                                                <option value="Raleway">Raleway</option>
                                                <option value="Red-Rose">Red Rose</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="Roboto-Mono">Roboto Mono</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font size:</span>
                                            <select name="fontSize" id="fontSize">
                                                <option class="fontSizeOption" value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="72">72</option>
                                                <option value="96">96</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 mx-1">I</p>
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li style="border-bottom:1px solid gray" class=" color-menu">
                                    <div onclick="openInnerTextBox(this)">
                                        <a href="#" class=" ">
                                            <p>Heading 6</p>
                                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></p>
                                        </a>
                                    </div>
                                    <div style="background-color: white;" class=" pb-2 ">
                                        <h6 style=" color: #144439;">H6 Example</h6>
                                        <div class="fontFamilyDrop">
                                            <span>Font:</span>
                                            <select name="fontFamily" id="fontFamily">
                                                <option class="fontOption" value="">Abril Falface</option>
                                                <option value="Alegreya">Alegreya</option>
                                                <option value="Amiri">Amiri</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Barlow">Barlow</option>
                                                <option value="Vietnam">Be Vietnam</option>
                                                <option value="BEBAS-NEUE">BEBAS NEUE</option>
                                                <option value="Comfortaa">Comfortaa</option>
                                                <option value="Dancing-Scrip">Dancing Script</option>
                                                <option value="">DM Sans</option>
                                                <option value="">DM Serif Display</option>
                                                <option value="">Droid Sans</option>
                                                <option value="">Droid Sans Mono</option>
                                                <option value="">Droid Serif</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Fjalla-One">Fjalla One</option>
                                                <option value="Fraunces">Fraunces</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Heebo">Heebo</option>
                                                <option value="Helvetica">Helvetica</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Jost">Jost</option>
                                                <option value="Lato">Lato</option>
                                                <option value="Merriweather">Merriweather</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Muli">Muli</option>
                                                <option value="Mulish">Mulish</option>
                                                <option value="">Noto Sans</option>
                                                <option value="">Noto Serif</option>
                                                <option value="">Nunito Sans</option>
                                                <option value="">Ond Standard TT</option>
                                                <option value="">Open Sans</option>
                                                <option value="Oswald">Oswald</option>
                                                <option value="Pelil-Format-Script">Pelil Format Script</option>
                                                <option value="Playfair-Display">Playfair Display</option>
                                                <option value="Poppins">Poppins</option>
                                                <option value="Prata">Prata</option>
                                                <option value="Prompt">Prompt</option>
                                                <option value="PT-Sans">PT Sans</option>
                                                <option value="Quicksand">Quicksand</option>
                                                <option value="Raleway">Raleway</option>
                                                <option value="Red-Rose">Red Rose</option>
                                                <option value="Roboto">Roboto</option>
                                                <option value="Roboto-Mono">Roboto Mono</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                                <option value="">Alegreya</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font size:</span>
                                            <select name="fontSize" id="fontSize">
                                                <option class="fontSizeOption" value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                                <option value="72">72</option>
                                                <option value="96">96</option>
                                            </select>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 mx-1">I</p>
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>

                        </a>
                    </li>

                    <!-- Theme button  -->
                    <li class=" px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>BUTTONS</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>
                            <ul class="list-group flex-column d-inline-block sub-submenu">
                                <li class="btn-sub-submenu-head">
                                    <p>BUTTONS</p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                                        </svg>
                                    </p>
                                </li>

                                <li class=" px-2 py-2 theme-menu buttonStyle">
                                    <button class="">Button</button> <br>
                                    <svg onclick="showBtnStyle(this)" id="downArrow" class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                    </svg>
                                    <svg onclick=" hightBtnStyle(this)" id="upArrow" class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                                    </svg>
                                </li>

                                <li class=" px-2 py-2 theme-menu buttonStyle " id="btnStyleShow">
                                    <div class="btns-div pb-2">
                                        <button class="btn_1 pm-2">Button</button>
                                        <button class="btn_2 pm-2">Button</button>
                                    </div>
                                    <div class="btns-div">
                                        <button class="btn_3">Button</button>
                                        <button class="btn_4">Button</button>
                                    </div>
                                </li>

                                <li class="btn-section-btn-option">
                                    <div style="display:flex; justify-content:center;">
                                        <button class="fontAndBorderColor">BUTTON STYLE</button>
                                        <button class="">BUTTON TEXT</button>
                                    </div>
                                </li>

                                <li style="border-bottom:1px solid gray" class=" button-sub-submenu">
                                    <div style="background-color: white;" class="">
                                        <span style="font-size: 20px; color: #144439;">Global text example</span>
                                        <div class="fontSizeDrop">
                                            <span>Font color</span>
                                            <div class="color-point"></div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Font format</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1 ml-1">I</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Text direction</span>
                                            <div style="display: flex;" class="FontFormat">
                                                <p class="p-1">B</p>
                                                <p style="font-style: italic;" class="p-1">I</p>
                                            </div>
                                        </div>

                                        <div class="fontSizeDrop">
                                            <span>Link text</span>
                                            <div style="display: flex; align-items: center;" class="FontFormat">
                                                <p style="text-decoration: underline; color: tomato; " class="p-1">
                                                    U</p>
                                                <div class="color-point ml-1"></div>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>
                        </a>
                    </li>

                    <li class=" px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>IMAGES</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>
                        </a>
                    </li>
                    <li class=" px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>ROWS & COLUMNS</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>
                        </a>
                    </li>
                    <li class=" px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>BACKGROUNDS</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>
                        </a>
                    </li>
                    <li class=" px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>SITE LAYOUT</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>
                        </a>
                    </li>

                </ul>
                <!-- /.submenu -->
            </li>
            <!-- Theme list end -->

            <!-- Pages list start -->
            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-regular fa-file-lines"></i>
                    <br /><span class="align-middle"><small>PAGES</small></span></span>
                <ul class="list-group flex-column submenu" style="display:none;width:400px;">
                    <li class="submenu-head">
                        <p>PAGES AND POPUPS</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="px-1">
                        <div style="display:flex; justify-content:center;">
                            <a style="border-bottom: 1px solid gray; padding: 15px 35px; font-weight: 500;" href="#" class="">PAGES</a>
                            <a style="border-bottom: 1px solid gray; padding: 15px 35px; font-weight: 500;" href="#" class="">POPUPS</a>
                        </div>
                    </li>
                    <li class="px-1 pages-new-page py-2">
                        <div style="display:flex; justify-content:center;">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z" />
                                </svg>
                                <span class="pl-1">New page</span>
                            </button>
                        </div>
                    </li>
                    <!-- end Posts -->

                    <li class="list-group-item pages-large-btn px-2">
                        <button>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                </svg>
                                <span class="pl-1">Home</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M481.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-30.9 28.1c-7.7 7.1-11.4 17.5-10.9 27.9c.1 2.9 .2 5.8 .2 8.8s-.1 5.9-.2 8.8c-.5 10.5 3.1 20.9 10.9 27.9l30.9 28.1c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-39.7-12.6c-10-3.2-20.8-1.1-29.7 4.6c-4.9 3.1-9.9 6.1-15.1 8.7c-9.3 4.8-16.5 13.2-18.8 23.4l-8.9 40.7c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-8.9-40.7c-2.2-10.2-9.5-18.6-18.8-23.4c-5.2-2.7-10.2-5.6-15.1-8.7c-8.8-5.7-19.7-7.8-29.7-4.6L69.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l30.9-28.1c7.7-7.1 11.4-17.5 10.9-27.9c-.1-2.9-.2-5.8-.2-8.8s.1-5.9 .2-8.8c.5-10.5-3.1-20.9-10.9-27.9L8.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l39.7 12.6c10 3.2 20.8 1.1 29.7-4.6c4.9-3.1 9.9-6.1 15.1-8.7c9.3-4.8 16.5-13.2 18.8-23.4l8.9-40.7c2-9.1 9-16.3 18.2-17.8C213.3 1.2 227.5 0 242 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l8.9 40.7c2.2 10.2 9.4 18.6 18.8 23.4c5.2 2.7 10.2 5.6 15.1 8.7c8.8 5.7 19.7 7.7 29.7 4.6l39.7-12.6c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM242 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                            </svg>
                        </button>
                    </li>
                    <li class="list-group-item pages-large-btn px-2">
                        <button>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                </svg>
                                <span class="pl-1">Insurance Services</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M481.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-30.9 28.1c-7.7 7.1-11.4 17.5-10.9 27.9c.1 2.9 .2 5.8 .2 8.8s-.1 5.9-.2 8.8c-.5 10.5 3.1 20.9 10.9 27.9l30.9 28.1c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-39.7-12.6c-10-3.2-20.8-1.1-29.7 4.6c-4.9 3.1-9.9 6.1-15.1 8.7c-9.3 4.8-16.5 13.2-18.8 23.4l-8.9 40.7c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-8.9-40.7c-2.2-10.2-9.5-18.6-18.8-23.4c-5.2-2.7-10.2-5.6-15.1-8.7c-8.8-5.7-19.7-7.8-29.7-4.6L69.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l30.9-28.1c7.7-7.1 11.4-17.5 10.9-27.9c-.1-2.9-.2-5.8-.2-8.8s.1-5.9 .2-8.8c.5-10.5-3.1-20.9-10.9-27.9L8.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l39.7 12.6c10 3.2 20.8 1.1 29.7-4.6c4.9-3.1 9.9-6.1 15.1-8.7c9.3-4.8 16.5-13.2 18.8-23.4l8.9-40.7c2-9.1 9-16.3 18.2-17.8C213.3 1.2 227.5 0 242 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l8.9 40.7c2.2 10.2 9.4 18.6 18.8 23.4c5.2 2.7 10.2 5.6 15.1 8.7c8.8 5.7 19.7 7.7 29.7 4.6l39.7-12.6c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM242 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                            </svg>
                        </button>
                    </li>
                    <li class="list-group-item pages-large-btn px-2">
                        <button>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M169.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 274.7 54.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                                <span class="pl-1">Claims</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M481.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-30.9 28.1c-7.7 7.1-11.4 17.5-10.9 27.9c.1 2.9 .2 5.8 .2 8.8s-.1 5.9-.2 8.8c-.5 10.5 3.1 20.9 10.9 27.9l30.9 28.1c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-39.7-12.6c-10-3.2-20.8-1.1-29.7 4.6c-4.9 3.1-9.9 6.1-15.1 8.7c-9.3 4.8-16.5 13.2-18.8 23.4l-8.9 40.7c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-8.9-40.7c-2.2-10.2-9.5-18.6-18.8-23.4c-5.2-2.7-10.2-5.6-15.1-8.7c-8.8-5.7-19.7-7.8-29.7-4.6L69.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l30.9-28.1c7.7-7.1 11.4-17.5 10.9-27.9c-.1-2.9-.2-5.8-.2-8.8s.1-5.9 .2-8.8c.5-10.5-3.1-20.9-10.9-27.9L8.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l39.7 12.6c10 3.2 20.8 1.1 29.7-4.6c4.9-3.1 9.9-6.1 15.1-8.7c9.3-4.8 16.5-13.2 18.8-23.4l8.9-40.7c2-9.1 9-16.3 18.2-17.8C213.3 1.2 227.5 0 242 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l8.9 40.7c2.2 10.2 9.4 18.6 18.8 23.4c5.2 2.7 10.2 5.6 15.1 8.7c8.8 5.7 19.7 7.7 29.7 4.6l39.7-12.6c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM242 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                            </svg>
                        </button>
                    </li>
                    <li class="list-group-item pages-large-btn px-2">
                        <button>
                            <div>
                                <span class="pl-1">Resources</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M481.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-30.9 28.1c-7.7 7.1-11.4 17.5-10.9 27.9c.1 2.9 .2 5.8 .2 8.8s-.1 5.9-.2 8.8c-.5 10.5 3.1 20.9 10.9 27.9l30.9 28.1c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-39.7-12.6c-10-3.2-20.8-1.1-29.7 4.6c-4.9 3.1-9.9 6.1-15.1 8.7c-9.3 4.8-16.5 13.2-18.8 23.4l-8.9 40.7c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-8.9-40.7c-2.2-10.2-9.5-18.6-18.8-23.4c-5.2-2.7-10.2-5.6-15.1-8.7c-8.8-5.7-19.7-7.8-29.7-4.6L69.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l30.9-28.1c7.7-7.1 11.4-17.5 10.9-27.9c-.1-2.9-.2-5.8-.2-8.8s.1-5.9 .2-8.8c.5-10.5-3.1-20.9-10.9-27.9L8.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l39.7 12.6c10 3.2 20.8 1.1 29.7-4.6c4.9-3.1 9.9-6.1 15.1-8.7c9.3-4.8 16.5-13.2 18.8-23.4l8.9-40.7c2-9.1 9-16.3 18.2-17.8C213.3 1.2 227.5 0 242 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l8.9 40.7c2.2 10.2 9.4 18.6 18.8 23.4c5.2 2.7 10.2 5.6 15.1 8.7c8.8 5.7 19.7 7.7 29.7 4.6l39.7-12.6c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM242 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                            </svg>
                        </button>
                    </li>
                    <li class="list-group-item pages-large-btn px-2">
                        <button>
                            <div>
                                <span class="pl-1">Contact & Support</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M481.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-30.9 28.1c-7.7 7.1-11.4 17.5-10.9 27.9c.1 2.9 .2 5.8 .2 8.8s-.1 5.9-.2 8.8c-.5 10.5 3.1 20.9 10.9 27.9l30.9 28.1c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-39.7-12.6c-10-3.2-20.8-1.1-29.7 4.6c-4.9 3.1-9.9 6.1-15.1 8.7c-9.3 4.8-16.5 13.2-18.8 23.4l-8.9 40.7c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-8.9-40.7c-2.2-10.2-9.5-18.6-18.8-23.4c-5.2-2.7-10.2-5.6-15.1-8.7c-8.8-5.7-19.7-7.8-29.7-4.6L69.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l30.9-28.1c7.7-7.1 11.4-17.5 10.9-27.9c-.1-2.9-.2-5.8-.2-8.8s.1-5.9 .2-8.8c.5-10.5-3.1-20.9-10.9-27.9L8.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l39.7 12.6c10 3.2 20.8 1.1 29.7-4.6c4.9-3.1 9.9-6.1 15.1-8.7c9.3-4.8 16.5-13.2 18.8-23.4l8.9-40.7c2-9.1 9-16.3 18.2-17.8C213.3 1.2 227.5 0 242 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l8.9 40.7c2.2 10.2 9.4 18.6 18.8 23.4c5.2 2.7 10.2 5.6 15.1 8.7c8.8 5.7 19.7 7.7 29.7 4.6l39.7-12.6c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM242 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                            </svg>
                        </button>
                    </li>
                    <!-- end Blog Assist -->

                </ul>
                <!-- /.submenu -->
            </li>
            <!-- Pages list end -->

            <!-- Widgets List start -->
            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-solid fa-plus"></i>
                    <br /><span class="align-middle"><small>WIDGETS</small></span>
                </span>
                <ul style="overflow: scroll;display:none;width:400px;" class="list-group flex-column  submenu">
                    <li class="submenu-head">
                        <p>WIDGETS</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="list-group-item widgets-search">
                        <div class="search-box">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                    </li>

                    <li class="list-group-item ">
                        <h4 class="">Popular</h4>
                    </li>
                    <li class="popular-list">
                        <div class="popular-grid">
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96H160V448c0 17.7 14.3 32 32 32s32-14.3 32-32V96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H192 32z" />
                                </svg><br>
                                <span>Text</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
                                </svg><br>
                                <span>Image</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                </svg><br>
                                <span>Icom</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg><br>
                                <span>For Call</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg><br>
                                <span>Map</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path d="M45.6 32C20.4 32 0 52.4 0 77.6V434.4C0 459.6 20.4 480 45.6 480c5.1 0 10-.8 14.7-2.4C74.6 472.8 177.6 440 320 440s245.4 32.8 259.6 37.6c4.7 1.6 9.7 2.4 14.7 2.4c25.2 0 45.6-20.4 45.6-45.6V77.6C640 52.4 619.6 32 594.4 32c-5 0-10 .8-14.7 2.4C565.4 39.2 462.4 72 320 72S74.6 39.2 60.4 34.4C55.6 32.8 50.7 32 45.6 32zM96 160a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm272 0c7.9 0 15.4 3.9 19.8 10.5L512.3 353c5.4 8 5.6 18.4 .4 26.5s-14.7 12.3-24.2 10.7C442.7 382.4 385.2 376 320 376c-65.6 0-123.4 6.5-169.3 14.4c-9.8 1.7-19.7-2.9-24.7-11.5s-4.3-19.4 1.9-27.2L197.3 265c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l26.4 33.1 87-127.6c4.5-6.6 11.9-10.5 19.8-10.5z" />
                                </svg> <br>
                                <span>Slider</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                </svg><br>
                                <span>Galary</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                </svg><br>
                                <span>Button</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96H160V448c0 17.7 14.3 32 32 32s32-14.3 32-32V96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H192 32z" />
                                </svg><br>
                                <span>HTML</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M448 32H361.9l-1 1-127 127h92.1l1-1L453.8 32.3c-1.9-.2-3.8-.3-5.8-.3zm64 128V96c0-15.1-5.3-29.1-14-40l-104 104H512zM294.1 32H201.9l-1 1L73.9 160h92.1l1-1 127-127zM64 32C28.7 32 0 60.7 0 96v64H6.1l1-1 127-127H64zM512 192H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192z" />
                                </svg><br>
                                <span>Large <br>Title (H1)</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z" />
                                </svg><br>
                                <span>Contact <br> Form</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <h4 class="">Basics</h4>
                    </li>
                    <li class="popular-list">
                        <div class="popular-grid">
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96H160V448c0 17.7 14.3 32 32 32s32-14.3 32-32V96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H192 32z" />
                                </svg><br>
                                <span>Text</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
                                </svg><br>
                                <span>Image</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                </svg><br>
                                <span>Icom</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg><br>
                                <span>For Call</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg><br>
                                <span>Map</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path d="M45.6 32C20.4 32 0 52.4 0 77.6V434.4C0 459.6 20.4 480 45.6 480c5.1 0 10-.8 14.7-2.4C74.6 472.8 177.6 440 320 440s245.4 32.8 259.6 37.6c4.7 1.6 9.7 2.4 14.7 2.4c25.2 0 45.6-20.4 45.6-45.6V77.6C640 52.4 619.6 32 594.4 32c-5 0-10 .8-14.7 2.4C565.4 39.2 462.4 72 320 72S74.6 39.2 60.4 34.4C55.6 32.8 50.7 32 45.6 32zM96 160a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm272 0c7.9 0 15.4 3.9 19.8 10.5L512.3 353c5.4 8 5.6 18.4 .4 26.5s-14.7 12.3-24.2 10.7C442.7 382.4 385.2 376 320 376c-65.6 0-123.4 6.5-169.3 14.4c-9.8 1.7-19.7-2.9-24.7-11.5s-4.3-19.4 1.9-27.2L197.3 265c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l26.4 33.1 87-127.6c4.5-6.6 11.9-10.5 19.8-10.5z" />
                                </svg> <br>
                                <span>Slider</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                </svg><br>
                                <span>Galary</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                </svg><br>
                                <span>Button</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96H160V448c0 17.7 14.3 32 32 32s32-14.3 32-32V96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H192 32z" />
                                </svg><br>
                                <span>HTML</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M448 32H361.9l-1 1-127 127h92.1l1-1L453.8 32.3c-1.9-.2-3.8-.3-5.8-.3zm64 128V96c0-15.1-5.3-29.1-14-40l-104 104H512zM294.1 32H201.9l-1 1L73.9 160h92.1l1-1 127-127zM64 32C28.7 32 0 60.7 0 96v64H6.1l1-1 127-127H64zM512 192H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192z" />
                                </svg><br>
                                <span>Large <br>Title (H1)</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z" />
                                </svg><br>
                                <span>Contact <br> Form</span>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item ">
                        <h4 class="">Media</h4>
                    </li>
                    <li class="popular-list">
                        <div class="popular-grid">
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96H160V448c0 17.7 14.3 32 32 32s32-14.3 32-32V96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H192 32z" />
                                </svg><br>
                                <span>Text</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
                                </svg><br>
                                <span>Image</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                </svg><br>
                                <span>Icom</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg><br>
                                <span>For Call</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg><br>
                                <span>Map</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path d="M45.6 32C20.4 32 0 52.4 0 77.6V434.4C0 459.6 20.4 480 45.6 480c5.1 0 10-.8 14.7-2.4C74.6 472.8 177.6 440 320 440s245.4 32.8 259.6 37.6c4.7 1.6 9.7 2.4 14.7 2.4c25.2 0 45.6-20.4 45.6-45.6V77.6C640 52.4 619.6 32 594.4 32c-5 0-10 .8-14.7 2.4C565.4 39.2 462.4 72 320 72S74.6 39.2 60.4 34.4C55.6 32.8 50.7 32 45.6 32zM96 160a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm272 0c7.9 0 15.4 3.9 19.8 10.5L512.3 353c5.4 8 5.6 18.4 .4 26.5s-14.7 12.3-24.2 10.7C442.7 382.4 385.2 376 320 376c-65.6 0-123.4 6.5-169.3 14.4c-9.8 1.7-19.7-2.9-24.7-11.5s-4.3-19.4 1.9-27.2L197.3 265c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l26.4 33.1 87-127.6c4.5-6.6 11.9-10.5 19.8-10.5z" />
                                </svg> <br>
                                <span>Slider</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                </svg><br>
                                <span>Galary</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                </svg><br>
                                <span>Button</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96H160V448c0 17.7 14.3 32 32 32s32-14.3 32-32V96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H192 32z" />
                                </svg><br>
                                <span>HTML</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M448 32H361.9l-1 1-127 127h92.1l1-1L453.8 32.3c-1.9-.2-3.8-.3-5.8-.3zm64 128V96c0-15.1-5.3-29.1-14-40l-104 104H512zM294.1 32H201.9l-1 1L73.9 160h92.1l1-1 127-127zM64 32C28.7 32 0 60.7 0 96v64H6.1l1-1 127-127H64zM512 192H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192z" />
                                </svg><br>
                                <span>Large <br>Title (H1)</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z" />
                                </svg><br>
                                <span>Contact <br> Form</span>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item ">
                        <h4 class="">Business</h4>
                    </li>
                    <li class="popular-list">
                        <div class="popular-grid">
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96H160V448c0 17.7 14.3 32 32 32s32-14.3 32-32V96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H192 32z" />
                                </svg><br>
                                <span>Text</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
                                </svg><br>
                                <span>Image</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                </svg><br>
                                <span>Icom</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg><br>
                                <span>For Call</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg><br>
                                <span>Map</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path d="M45.6 32C20.4 32 0 52.4 0 77.6V434.4C0 459.6 20.4 480 45.6 480c5.1 0 10-.8 14.7-2.4C74.6 472.8 177.6 440 320 440s245.4 32.8 259.6 37.6c4.7 1.6 9.7 2.4 14.7 2.4c25.2 0 45.6-20.4 45.6-45.6V77.6C640 52.4 619.6 32 594.4 32c-5 0-10 .8-14.7 2.4C565.4 39.2 462.4 72 320 72S74.6 39.2 60.4 34.4C55.6 32.8 50.7 32 45.6 32zM96 160a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm272 0c7.9 0 15.4 3.9 19.8 10.5L512.3 353c5.4 8 5.6 18.4 .4 26.5s-14.7 12.3-24.2 10.7C442.7 382.4 385.2 376 320 376c-65.6 0-123.4 6.5-169.3 14.4c-9.8 1.7-19.7-2.9-24.7-11.5s-4.3-19.4 1.9-27.2L197.3 265c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l26.4 33.1 87-127.6c4.5-6.6 11.9-10.5 19.8-10.5z" />
                                </svg> <br>
                                <span>Slider</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                </svg><br>
                                <span>Galary</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                </svg><br>
                                <span>Button</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96H160V448c0 17.7 14.3 32 32 32s32-14.3 32-32V96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H192 32z" />
                                </svg><br>
                                <span>HTML</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M448 32H361.9l-1 1-127 127h92.1l1-1L453.8 32.3c-1.9-.2-3.8-.3-5.8-.3zm64 128V96c0-15.1-5.3-29.1-14-40l-104 104H512zM294.1 32H201.9l-1 1L73.9 160h92.1l1-1 127-127zM64 32C28.7 32 0 60.7 0 96v64H6.1l1-1 127-127H64zM512 192H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192z" />
                                </svg><br>
                                <span>Large <br>Title (H1)</span>
                            </div>
                            <div class="popular-grid_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z" />
                                </svg><br>
                                <span>Contact <br> Form</span>
                            </div>
                        </div>
                    </li>

                    <li class="">
                        <a href="#" class="">Forms</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Home Valuation</a>
                    </li>
                </ul>
                <!-- /.submenu -->
            </li>
            <!-- Widgets List end -->

            <!-- CONTENT LIBRARY list start   -->
            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-regular fa-folder"></i>
                    <br /><span class="align-middle"><small>CONTENT</small></span>
                </span>

                <ul class="list-group flex-column submenu" style="display:none;width:480px;">
                    <li class="submenu-head">
                        <p>CONTENT LIBRARY</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="list-group-item px-2">
                        <p style="font-size: 12px;">Add content by importing it from a website or collecting it from
                            your
                            customer.</p>
                    </li>
                    <li class="px-1 contact-btn py-2">
                        <div style="display:flex; justify-content:center;">
                            <button class="contact-btn_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z" />
                                </svg>
                                <span class="pl-1">Import content</span>
                            </button>
                        </div>
                    </li>
                    <li class="px-1 contact-btn">
                        <div style="display:flex; justify-content:center;">
                            <button class="contact-btn_2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z" />
                                </svg>
                                <span class="pl-1">Collect from client</span>
                            </button>
                        </div>
                    </li>
                    <li class="px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>BUSINESS INFO</p>
                        </a>
                    </li>
                    <li class="px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>BUSINESS TEXT</p>
                        </a>
                    </li>
                    <li class="px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>BUSINESS IMAGES</p>
                        </a>
                    </li>
                    <li class="px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>COLLECTIONS</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>
                        </a>
                    </li>
                    <li class="px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>FIND AND REPLACE</p>
                        </a>
                    </li>
                    <li class="px-2 py-2 theme-menu">
                        <a href="#" class="">
                            <p>SITE CONTENT</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg></p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- CONTENT LIBRARY list end   -->

            <!-- PERSONALIZE list start   -->
            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <br /><span class="align-middle"><small>PERSONALIZE</small></span>
                </span>
                <ul class="list-group flex-column  submenu" style="display:none;width:480px;">
                    <li class="submenu-head">
                        <p>WEBSITE PERSONALIZATION</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="px-1 pages-new-page py-2">
                        <div style="display:flex; justify-content:center;">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z" />
                                </svg>
                                <span class="pl-1">New Rule</span>
                            </button>
                        </div>
                    </li>

                    <!-- <li class="list-group-item pl-4">
                <a href="#" class="">Users</a>
              </li> -->
                </ul>
            </li>
            <!-- PERSONALIZE list end   -->


            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <br /><span class="align-middle"><small>ECOMMERCE</small></span>
                </span>
                <ul class="list-group flex-column submenu" style="display:none;width:480px;">
                    <li class="submenu-head">
                        <p>ECOMMERCE</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Training</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Tutorials</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Ask a Question</a>
                    </li>
                </ul>
            </li>

            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-solid fa-user-check"></i>
                    <br /><span class="align-middle"><small>MEMVERSHIP</small></span></span>
                <ul class="list-group flex-column  submenu" style="display:none;width:480px;">
                    <li class="submenu-head">
                        <p>MEMBERSHIP</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Training</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Tutorials</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Ask a Question</a>
                    </li>
                </ul>
            </li>

            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-regular fa-comment"></i>
                    <br /><span class="align-middle"><small>BLOG</small></span></span>
                <ul class="list-group flex-column submenu" style="display:none;width:480px;">
                    <li class="submenu-head">
                        <p>MANAGE BLOG</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Training</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Tutorials</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Ask a Question</a>
                    </li>
                </ul>
            </li>

            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-solid fa-puzzle-piece"></i>
                    <br /><span class="align-middle"><small>APP STORE</small></span></span>
                <ul class="list-group flex-column  submenu" style="display:none;width:480px;">
                    <li class="submenu-head">
                        <p>APP STORE</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Training</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Tutorials</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Ask a Question</a>
                    </li>
                </ul>
            </li>

            <li class="list-group-item ">
                <span onclick="openSubContent(this)">
                    <i class="fa-solid fa-gear"></i>
                    <br /><span class="align-middle"><small>SEO & SETTINGS</small></span></span>
                <ul class="list-group flex-column  submenu" style="display:none;width:480px;">
                    <li class="submenu-head">
                        <p>SEO & SETTINGS</p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                        </p>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Training</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Tutorials</a>
                    </li>
                    <li class="list-group-item pl-4">
                        <a href="#" class="">Ask a Question</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- /.first-menu -->
    </div>
    <!-- /.sidebar -->
</div>




<script>
    const openSubContent = (tag) => {
        console.log('heuy');
        let parentTAg = tag.parentElement
        let children = parentTAg.children[1];
        let submenus = document.querySelectorAll('submenu');
        submenus = Array.from(submenus);
        submenus.forEach(element => {
            if (element.style.display === '' && element !== tag) {
                element.style.display = 'none';
            }
        });
        children.style.display === 'none' ? children.style.display = '' : children.style.display = 'none';
    }
    const openInnerTextBox = (tag) => {
        console.log('heuy');
        let parentTAg = tag.parentElement
        let children = parentTAg.children[1];
        let submenus = document.querySelectorAll('submenu');
        submenus = Array.from(submenus);
        submenus.forEach(element => {
            if (element.style.display === '') {
                element.style.display = 'none';
            }
        });
        children.style.display === 'none' ? children.style.display = '' : children.style.display = 'none';
    }
</script>
<script>
    const showBtnStyle = (tag) => {
        document.getElementById("btnStyleShow").classList.remove("")
        tag.classList.add('');
        document.getElementById('upArrow').classList.remove('')
    }
    const hightBtnStyle = (tag) => {
        document.getElementById("btnStyleShow").classList.add("")
        tag.classList.add('');
        document.getElementById('downArrow').classList.remove('')
    }
</script>