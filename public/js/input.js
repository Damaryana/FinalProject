$(".delete-button").on('click', function(){
    $(this).siblings(".trash").css("display", "flex");
})

$(".edit-button").on('click', function(){
    $(this).siblings(".edit").css("display", "block");
})

$(".cancel").on('click', function(){
    $(".trash").css("display", "none");
    $(".edit").css("display", "none");
})
