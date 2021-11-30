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
