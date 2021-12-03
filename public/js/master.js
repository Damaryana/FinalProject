var docWidth = document.documentElement.offsetWidth;
var button = document.getElementById("button-toggle");
var nav = document.getElementById("navbar");

[].forEach.call(
  document.querySelectorAll('*'),
  function(el) {
    if (el.offsetWidth > docWidth) {
      console.log(el);
    }
  }
);

function expandDiv(el){
    var target = el.getAttribute("data-list");
    var x = document.getElementById(target);

    if(x.style.display != "block"){
        x.style.display = "block";
        el.style.fontWeight = "bold";
    }else{
        x.style.display = "none";
        el.style.fontWeight = "normal";
    }
}

button.addEventListener("click", function(){
    this.classList.toggle("active");

    if(nav.style.display != "block"){
        nav.style.display = "block";
    }else{
        nav.style.display ="none";
    }
});


$(function(){
$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


  $('#search').on('keyup', function(){
    var value = $(this).val();
    
    if(value.length >= 3){
      $.ajax({
        data: {value:value},
        url:'/search/part',
        type:'post',
        success: function(response){
          $("#search-result").html(response);

          $('html').on('click', function(e){
            if(!$(e.target).closest("#search-result").length){
              $("#search-result").html('');
            }
          });

          $("#search-result div").on("click", function(){
            var id = $(this).data("value");
            $(`.open-instruction[data-value="${id}"]`).get(0).click();
            $("#search-result").html('');
          });
        }
      })
    }else{
      $("#search-result").html('');
    }
  });

  $('.open-instruction').on('click', function(e){
    var id = $(this).data("value");
    var length = $(".active").length;

    for(var i=0; i < length; i++){
      $(".active").removeClass("active");
    }

    $(this).addClass("active");

    $.ajax({
      data: {id : id},
      url: '/sub-part/show',
      type: 'post',
      success: function(response){
        $('.list-instruction').html(response);
      }
    })
  });

});

$(document).ready(function(){
  $("li:first-child .open-instruction:first-child").trigger("click");
});
