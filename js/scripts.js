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