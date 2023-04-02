
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
    console.log(tag.value);
    if(tag.value == "Delicious Handrawn"){
        selected_btn__.classList.remove('ApplyFontFamilyOswald');
        selected_btn__.classList.remove('ApplyFontFamilyRoboto');
        selected_btn__.classList.add('ApplyFontFamilyHandrawn');
    }
    else if(tag.value == "Oswald sans-serif"){
        selected_btn__.classList.remove('ApplyFontFamilyHandrawn');
        selected_btn__.classList.remove('ApplyFontFamilyRoboto');
        selected_btn__.classList.add('ApplyFontFamilyOswald');
    }
    else if(tag.value == "Roboto Mono"){
        selected_btn__.classList.remove('ApplyFontFamilyHandrawn');
        selected_btn__.classList.remove('ApplyFontFamilyOswald');
        selected_btn__.classList.add('ApplyFontFamilyRoboto');
    }
    console.log('omar',selected_btn__);
}

const btn_font_size_changer = (tag) => {
    // console.log(tag.value);
    let selected_btn__ = document.querySelector('#selected_btn__');
    selected_btn__.style.fontSize = `${tag.value}px`;
}

// for text color 


// making it underline italic or bold 
const change_btn_transform = (content) => {
    let selected_btn__ = document.querySelector('#selected_btn__');

    if (content == 'underline') {
        if (selected_btn__.style.textDecoration === '') {
            selected_btn__.style.textDecoration = 'underline';
        } else {
            selected_btn__.style.textDecoration = '';
        }
    }

    if (content == 'bold') {
        console.log(selected_btn__.style.fontWeight === '');
        if (selected_btn__.style.fontWeight === '') {
            selected_btn__.style.fontWeight = 'bold';
        } else {
            selected_btn__.style.fontWeight = '';
        }
    }

    if (content == 'italic') {
        if (selected_btn__.style.fontStyle === '') {
            selected_btn__.style.fontStyle = 'italic';
        } else {
            selected_btn__.style.fontStyle = '';
        }
    }
}
const set_btn_hover_transform = (contentType) => {
    if (contentType === 'underline') {
        if (selected_btn__.classList.contains('hover_to_underline')) {
            selected_btn__.classList.remove('hover_to_underline');
        } else {
            selected_btn__.classList.add('hover_to_underline');
        }
    }
    if (contentType === 'bold') {
        if (selected_btn__.classList.contains('hover_to_bold')) {
            selected_btn__.classList.remove('hover_to_bold');
        } else {
            selected_btn__.classList.add('hover_to_bold');
        }
    }
    if (contentType === 'italic') {
        if (selected_btn__.classList.contains('hover_to_italic')) {
            selected_btn__.classList.remove('hover_to_italic');
        } else {
            selected_btn__.classList.add('hover_to_italic');
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