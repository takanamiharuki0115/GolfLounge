$(".hamBtn").click(function(){
    const isChecked = $("#hamburger").is(":checked");
    if(isChecked) {
        $(".hamburger__menus").addClass("is-active")
    }
    else {
        $(".hamburger__menus").removeClass("is-active")
    }
})

$('#to-top').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
});


const qaitemlist = document.getElementsByClassName("qa-item");
for(let i = 0; i < qaitemlist.length; i++)
{
    qaitemlist[i].addEventListener("click", ()=> {
        if(qaitemlist[i].classList.contains("qa-item-open")) {
            qaitemlist[i].classList.remove("qa-item-open");
            return true;
        }
        else {
            for(let j = 0; j < qaitemlist.length; j++){
                qaitemlist[j].classList.remove("qa-item-open");
            }
            qaitemlist[i].classList.add("qa-item-open");
        }
    });
}
