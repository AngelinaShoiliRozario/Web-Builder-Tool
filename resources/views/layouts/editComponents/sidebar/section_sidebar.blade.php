<div class="sidebar___section" style="overflow-y:scroll">
    <nav style="padding:8px 10px;text-align:center;background:orange;color:white;">SECTIONS</nav>
    <div>

    </div>
    <div class="parent" style="border-bottom:1.5px solid gray;">
        <div class="header" onclick="showChild_(this)">
            <span>
                Custom
            </span>
        </div>
        <div class="content" style="display:none;">
            <div style="display:flex;justify-content:space-between;padding:15px 20px;border-bottom:1.5px solid black;">
                <span>Custom Sections</span>
                <span>
                    <i class="fa-solid fa-bars"></i>
                    <i class="fa-solid fa-xmark" style="cursor:pointer;border:1px solid gray;padding:3px 5px;"></i>

                </span>
            </div>
            <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                <br>
                <span style="padding:8px 15px;background:orange;border-radius:18px;">Create Section</span>
                <br>
                <div>Build Your Own Section</div>

            </div>

        </div>
    </div>

    <div class="parent" style="border-bottom:1.5px solid gray;position:relative;">
        <div class="header" onclick="showChild_(this)">
            <span>
                Flex
            </span>
        </div>
        <div style="position: absolute;left:100%;">
            content
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam cupiditate, quam, non harum placeat dolorem eaque ipsa a sed unde fugiat! Nisi temporibus non culpa quo ex reprehenderit sunt alias.
        </div>

    </div>

    <div class="section_parent" style="font-size: 12px;cursor:pointer;">
        <div class="">
            <span>INTRO</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>COMING SOON</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>FEATURES</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>ABOUT</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>LOGOS</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>TEXT BLOCKS</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>TABS</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>TEXT & IMAGE</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>INTRO</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>TEAM</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>RESTAURANT</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>TESTIMONIALS</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>

    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>CONTACT US</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>GALLERY</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>VIDEO</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>EVENTS</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>PROMOTION</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>FAQS</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>PLANS</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>SOCIAL</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>FULL PAGE</span>
        </div>
        <div class="content" style="display:none;">

        </div>
    </div>
    <div class="section_parent" style="font-size: 12px;">
        <div>
            <span>FOOTER</span>
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
