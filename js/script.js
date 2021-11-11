let prevScrollpos = window.pageYOffset;
window.onscroll = () => {
    let currentScrollpos = window.pageYOffset;
    let currentMenuHeight = window.getComputedStyle(document.querySelector('#menu')).height;
    if (prevScrollpos > currentScrollpos) {
        document.getElementById('menu').style.top = "0";
        //window.scrollY retorna la posicion actual y
        if (window.scrollY < window.innerHeight * 0.923 && !document.getElementById("toggleMobileMenu").classList.contains('show')) {
            document.getElementById('menu').style.background = "transparent";
        } else {
            document.getElementById('menu').style.background = "var(--ballena-negro)"
        }
    }
    else {
        document.getElementById('menu').style.top = "-" + currentMenuHeight;
    }
    prevScrollpos = currentScrollpos;
}
function hideMenu() {
    document.getElementById("toggleMobileMenu").classList.remove('show');
    document.getElementById("toggleMobileMenu").classList.add('collapse');
    document.getElementById("myNavBartoggler").classList.add('collapsed');
}
function darkMenuMobile() {
    document.getElementById("menu").style.background = "var(--ballena-negro)";
}

document.addEventListener("DOMContentLoaded", function (e) {
    detectBrowser();
});