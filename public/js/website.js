var button = document.getElementById("button-toggle");
var nav = document.getElementById("navbar-body");
button.addEventListener("click", function(){
    this.classList.toggle("active");

    if(nav.style.display != "block"){
        nav.style.display = "block";
    }else{
        nav.style.display ="none";
    }
});

$('.navbar-items').on('click', function(){
    let link = $(this).attr("data-link");

    $.ajax({
        url: "/"+link,
        type: "get",
        success: function(response){
            $('main').html(response.html);
        }
    });
})

$(document).ready(function() {
    $('.navbar-items').eq(1).trigger('click');
});