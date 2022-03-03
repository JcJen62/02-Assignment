function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle('open');
    document.getElementById("primaryNav").classList.toggle("open")
    if(document.getElementById("hamburgerBtn").classList.contains('open')){
        document.getElementById('form').style.display='none'
    } else {
        document.getElementById('form').style.display='flex'
    }
    
}

var x = document.getElementById('hamburgerBtn');
x.onclick= toggleMenu;


// Adds active class to current menu item
var urlString = document.location.href;

var urlArray = urlString.split('/');

var pageHREF = urlArray[urlArray.length - 1];

var menu = document.querySelectorAll('ul#primaryNav li a');

if (pageHREF !== "") {
    for(let i = 0; i < menu.length; i++) {
        var currentURL = (menu[i].getAttribute("href"));

        if (currentURL === pageHREF) {
            menu[i].parentNode.className = "active";

            if(menu[i].parentNode.parentNode.parentNode.tagName === "LI") {
                menu[i].parentNode.parentNode.parentNode.className = "parent active";
            }
        } else {
            menu[i].parentNode.className = "";
        }
    } // End of search for a match
} else {
    menu[0].parentNode.className = "active";
}