var docWidth = document.documentElement.offsetWidth;

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

$(function(){
$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
    url: '/admin/sub-part/show',
    type: 'post',
    success: function(response){
      $('.list-instruction').html(response);
    }
  })
})

});

$(document).ready(function(){
  $("li:first-child .open-instruction:first-child").trigger("click");
});
