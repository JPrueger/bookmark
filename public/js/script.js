    var button = document.querySelectorAll(".collapsible");
    var i;

    for (i = 0; i < button.length; i++) {
        button[i].addEventListener("click", function(_e) {
        
        // var current_card = _e.target;
        // console.log(current_card);
        _e.target.classList.toggle("active");

        var content = _e.target.nextElementSibling;
        console.log(content);

        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
    }