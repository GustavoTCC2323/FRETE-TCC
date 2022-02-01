window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 2 || document.documentElement.scrollTop > 2) {
        document.getElementById("header").style.backgroundColor = "rgba(0,53,102, 0.6)";
        document.getElementById("header").style.transition = "ease 0.5s";
        document.getElementById("header").style.boxShadow = "2px 2px 2px 1px rgba(0, 0, 0, 0.2)";
    } else {
        document.getElementById("header").style.backgroundColor = "#FFC300";
        document.getElementById("header").style.boxShadow = "1px 1px 1px 1px rgba(0, 0, 0, 0.1)";
    }
}