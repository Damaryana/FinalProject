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
  }else{
      x.style.display = "none";
  }
}