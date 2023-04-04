
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
}
const btn_text_changer = (tag) => {
    let selected_btn__ = document.querySelector('#selected_btn__');
    selected_btn__.innerHTML = tag.value;
}
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
//  border radius change of btn 
const border_radius_change_of_btn = (tag) => {
    let btn_width_3 = document.querySelector('#btn_width_3');
    btn_width_3.setAttribute('value', tag.value);
    let selected_btn__ = document.querySelector('#selected_btn__');
    selected_btn__.style.borderRadius = `${tag.value}px`;
    btn_width_3.setAttribute('value', tag.value);
}

// change Button Font Family
const changeBtnFontFamily = (tag) => {
    let selected_btn__ = document.querySelector('#selected_btn__');
    console.log(tag);
    if(tag.value == "Delicious Handrawn"){
        selected_btn__.style.fontFamily = "'Delicious Handrawn', cursive";
        tag.style.fontFamily = "'Delicious Handrawn', cursive";
    }
    else if(tag.value == "Oswald sans-serif"){
        selected_btn__.style.fontFamily = "'Oswald', sans-serif";
        tag.style.fontFamily = "'Oswald', sans-serif";
    }
    else if(tag.value == "Roboto Mono"){
        selected_btn__.style.fontFamily = "'Roboto Mono', monospace";
    }
    else if(tag.value == "Alkatra cursive"){
        selected_btn__.style.fontFamily = "'Alkatra', cursive";
    }
    else if(tag.value == "Bebas Neue cursive"){
        selected_btn__.style.fontFamily = "'Bebas Neue', cursive";
    }
    else if(tag.value == "Lobster cursive"){
        selected_btn__.style.fontFamily = "'Lobster', cursive";
    }
    else if(tag.value == "Righteous cursive"){
        selected_btn__.style.fontFamily = "'Righteous', cursive";
    }
    else if(tag.value == "Courgette cursive"){
        selected_btn__.style.fontFamily = "'Courgette', cursive";
    }
}

const btn_font_size_changer = (tag) => {
    // console.log(tag.value);
    let selected_btn__ = document.querySelector('#selected_btn__');
    selected_btn__.style.fontSize = `${tag.value}px`;
}

// for text color 


// making it underline italic or bold 
const change_btn_transform = (tag,content) => {
    let selected_btn__ = document.querySelector('#selected_btn__');

    if (content == 'underline') {
        if (selected_btn__.style.textDecoration === '') {
            selected_btn__.style.textDecoration = 'underline';
            tag.style.border = "1px solid gray";
        } else {
            selected_btn__.style.textDecoration = '';
            tag.style.border = "";
        }
    }

    if (content == 'bold') {
        console.log(selected_btn__.style.fontWeight === '');
        if (selected_btn__.style.fontWeight === '') {
            selected_btn__.style.fontWeight = 'bold';
            tag.style.border = "1px solid gray";
        } else {
            selected_btn__.style.fontWeight = '';
            tag.style.border = "";
        }
    }

    if (content == 'italic') {
        if (selected_btn__.style.fontStyle === '') {
            selected_btn__.style.fontStyle = 'italic';
            tag.style.border = "1px solid gray";
        } else {
            selected_btn__.style.fontStyle = '';
            tag.style.border = "";
        }
    }
}
const set_btn_hover_transform = (tag, contentType) => {
    if (contentType === 'underline') {
        if (selected_btn__.classList.contains('hover_to_underline')) {
            selected_btn__.classList.remove('hover_to_underline');
            tag.style.border = "";
        } else {
            selected_btn__.classList.add('hover_to_underline');
            tag.style.border = "1px solid gray";
        }
    }
    if (contentType === 'bold') {
        if (selected_btn__.classList.contains('hover_to_bold')) {
            selected_btn__.classList.remove('hover_to_bold');
            tag.style.border = "";
        } else {
            selected_btn__.classList.add('hover_to_bold');
            tag.style.border = "1px solid gray";
        }
    }
    if (contentType === 'italic') {
        if (selected_btn__.classList.contains('hover_to_italic')) {
            selected_btn__.classList.remove('hover_to_italic');
            tag.style.border = "";
        } else {
            selected_btn__.classList.add('hover_to_italic');
            tag.style.border = "1px solid gray";
        }
    }
}
const align_this_btn = (type) => {
    let selected_btn__ = document.querySelector('#selected_btn__');

    if (type == 'left') {
        // checking if the btn has respective container or not
        if (selected_btn__.parentNode.classList.contains('btn_container__')) {
            selected_btn__.parentNode.style.justifyContent = 'left';
        } else {
            // need to create the btn container and need to add class to it
            let div = document.createElement('div');
            div.classList.add('btn_container__');
            let child = selected_btn__.cloneNode(true);
            div.appendChild(child);
            div.style.display = 'flex';
            div.style.justifyContent = 'left';
            console.log(div);
            console.log(div.style.display);
            selected_btn__.parentNode.replaceChild(div, selected_btn__);
        }

    }
    if (type == 'center') {
        // checking if the btn has respective container or not
        if (selected_btn__.parentNode.classList.contains('btn_container__')) {
            selected_btn__.parentNode.style.justifyContent = 'center';
        } else {
            // need to create the btn container and need to add class to it
            let div = document.createElement('div');
            div.classList.add('btn_container__');
            div.style.display = 'flex';
            div.style.justifyContent = 'center';

            let child = selected_btn__.cloneNode(true);
            div.appendChild(child);
            console.log(div);
            selected_btn__.parentNode.replaceChild(div, selected_btn__);
        }

    }
    if (type == 'right') {
        // checking if the btn has respective container or not
        if (selected_btn__.parentNode.classList.contains('btn_container__')) {
            selected_btn__.parentNode.style.justifyContent = 'right';
        } else {
            // need to create the btn container and need to add class to it
            let div = document.createElement('div');
            div.classList.add('btn_container__');
            let child = selected_btn__.cloneNode(true);
            div.appendChild(child);
            div.style.display = 'flex';
            div.style.justifyContent = 'right';
            selected_btn__.parentNode.replaceChild(div, selected_btn__);
        }
    }
}



const pickr_3 = Pickr.create({
    el: ".hover-color-picker",
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
  pickr_3.on("change", (color, source, instance) => {
    let newColor = color.toRGBA();
    document.getElementById(
      "selected_btn__"
    ).setAttribute("onmouseover", `this.style.color='rgba(${newColor[0]},${newColor[1]},${newColor[2]},${newColor[3]})'`);
  });



// script for button background color
// Simple example, see optional options for more configuration.
 const pickrs = Pickr.create({
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
  pickrs.on("change", (color, source, instance) => {
    let newColor = color.toRGBA();
    document.getElementById(
      "selected_btn__"
    ).style.backgroundColor = `rgba(${newColor[0]},${newColor[1]},${newColor[2]},${newColor[3]})`;
  });




// js for gradient background color 
    const modal = document.querySelector(".modal");
    const modalContainer = document.querySelector(".modal-container");
    const openBtn = document.querySelector(".btn");
    let priviews = document.getElementById("priview");
    let selectMenu = document.getElementById("direction-option")
    let colorInput = document.querySelectorAll(".colors input");
    const  openGradientBgModal = () =>{
        modal.style.display = "flex";
    }
    const modalClose = () => {
        modal.style.display = "none";
    };
    
    window.addEventListener("click", (e) => {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    });
    const generateGradient = () => {
        let selected_btn__ = document.getElementById('selected_btn__');
        const gradient = `linear-gradient(${selectMenu.value}, ${colorInput[1].value} , ${colorInput[0].value})`;
        priviews.style.background = gradient;
        selected_btn__.style.background = gradient;
  };


  //  border change of btn 
const border_change_of_btn = (tag) => {
    let btn_border_1 = document.querySelector('#btn_border_1');
    btn_border_1.setAttribute('value', tag.value);
    let selected_btn__ = document.querySelector('#selected_btn__');
    selected_btn__.style.border = `${tag.value}px solid blue`;
    // selected_btn__.style.paddingRight = `${tag.value}px`;
}

const pickr_4 = Pickr.create({
    el: ".border-color-picker",
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
  pickr_4.on("change", (color, source, instance) => {
    let newColor = color.toRGBA();

    document.getElementById(
      "selected_btn__"
    ).style.borderColor = `rgba(${newColor[0]},${newColor[1]},${newColor[2]},${newColor[3]})`;
  });



  // script for background image preview 
  function readURL(input) {
    if (input.files && input.files[0]) {
   var reader = new FileReader();
   console.log("reader", reader);
   reader.onload = function(e) {
       $('#imagePreview').css('background-image', 'url('+e.target.result +')');
       $('#selected_btn__').css('background-image', 'url('+e.target.result +')');
       $('#imagePreview').hide();
       $('#imagePreview').fadeIn(650);
   }
   reader.readAsDataURL(input.files[0]);
   }
   }
   $("#imageUpload").change(function() {
       readURL(this);
   });





    // Find animation trigger
    const find_animation_trigger = (tag) =>{
        if (tag.value == 'Entrance') {
            document.getElementById("Animation_").style.display = "flex";
            console.log(tag.value,  document.getElementById("Animation_"));
        }
        else{
            document.getElementById("Animation_").style.display = "none";
            console.log(tag.value,  document.getElementById("Animation_"));
        }
    }
    // For apply animation
    const create_animation = (tag) =>{
        let selected_btn__ = document.getElementById('selected_btn__');
        console.log('animation', tag.value);
        if (tag.value == "Fade In") {
            document.getElementById("In_place").style.display  = ""
        }
        if (tag.value == "") {
            
        }
        if (tag.value == "") {
            
        }
    }









     //  Letter Spacing change of btn 
    const letter_spacing_change_of_btn = (tag) => {
        let btn_letter_space = document.querySelector('#btn_letter_space');
        btn_letter_space.setAttribute('value', tag.value);
        let selected_btn__ = document.querySelector('#selected_btn__');
        selected_btn__.style.letterSpacing = `${tag.value}px`;
    }
     //  Top Bottom Spacing or Top buttom Padding change of btn 
    const top_bottom_spacing_of_btn = (tag) => {
        let top_bottom_spacing = document.querySelector('#top_bottom_spacing');
        top_bottom_spacing.setAttribute('value', tag.value);
        let selected_btn__ = document.querySelector('#selected_btn__');
        selected_btn__.style.paddingTop = `${tag.value}px`;
        selected_btn__.style.paddingBottom = `${tag.value}px`;
    }
     //  Left right Spacing or Left right Padding change of btn 
    const left_right_spacing_of_btn = (tag) => {
        let left_right_spacing = document.querySelector('#left_right_spacing');
        left_right_spacing.setAttribute('value', tag.value);
        let selected_btn__ = document.querySelector('#selected_btn__');
        selected_btn__.style.paddingLeft = `${tag.value}px`;
        selected_btn__.style.paddingRight = `${tag.value}px`;
    }


