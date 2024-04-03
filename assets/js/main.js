// $(".p-department__btn--first").click(function(){
//     $(".p-department__btn").each(function(){
//         $(this).removeClass("is-active")
//     })
//     $(this).addClass("is-active")
//     $(".p-department__ctn__items").each(function(){
//         $(this).removeClass("is-active")
//     })
//     $(".p-department__ctn__items--first").addClass("is-active")
// })

// $(".p-department__btn--second").click(function(){
//     $(".p-department__btn").each(function(){
//         $(this).removeClass("is-active")
//     })
//     $(this).addClass("is-active")
//     $(".p-department__ctn__items").each(function(){
//         $(this).removeClass("is-active")
//     })
//     $(".p-department__ctn__items--second").addClass("is-active")
// })

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

// $(".__item.has-child").click(function(){
//     $(this).toggleClass("is-active")
// })
