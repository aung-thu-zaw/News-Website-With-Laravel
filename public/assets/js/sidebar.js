let nav = true;
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    nav = false;
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    nav = true;
    -1;
}

function toggleNav() {
    nav ? openNav() : closeNav();
}

window.onload(openNav());

function toggleDownArrowOne() {
    if (
        document.getElementById("down-icon-1").classList.contains("left-icon-1")
    ) {
        document.getElementById("down-icon-1").classList.remove("left-icon-1");
        document.getElementById("down-icon-1").classList.add("down-icon-1");
    } else if (
        document.getElementById("down-icon-1").classList.contains("down-icon-1")
    ) {
        document.getElementById("down-icon-1").classList.remove("down-icon-1");
        document.getElementById("down-icon-1").classList.add("left-icon-1");
    }
}
function toggleDownArrowTwo() {
    if (
        document.getElementById("down-icon-2").classList.contains("left-icon-2")
    ) {
        document.getElementById("down-icon-2").classList.remove("left-icon-2");
        document.getElementById("down-icon-2").classList.add("down-icon-2");
    } else if (
        document.getElementById("down-icon-2").classList.contains("down-icon-2")
    ) {
        document.getElementById("down-icon-2").classList.remove("down-icon-2");
        document.getElementById("down-icon-2").classList.add("left-icon-2");
    }
}
function toggleDownArrowThree() {
    if (
        document.getElementById("down-icon-3").classList.contains("left-icon-3")
    ) {
        document.getElementById("down-icon-3").classList.remove("left-icon-3");
        document.getElementById("down-icon-3").classList.add("down-icon-3");
    } else if (
        document.getElementById("down-icon-3").classList.contains("down-icon-3")
    ) {
        document.getElementById("down-icon-3").classList.remove("down-icon-3");
        document.getElementById("down-icon-3").classList.add("left-icon-3");
    }
}
function toggleDownArrowFour() {
    if (
        document.getElementById("down-icon-4").classList.contains("left-icon-4")
    ) {
        document.getElementById("down-icon-4").classList.remove("left-icon-4");
        document.getElementById("down-icon-4").classList.add("down-icon-4");
    } else if (
        document.getElementById("down-icon-4").classList.contains("down-icon-4")
    ) {
        document.getElementById("down-icon-4").classList.remove("down-icon-4");
        document.getElementById("down-icon-4").classList.add("left-icon-4");
    }
}
function toggleDownArrowFive() {
    if (
        document.getElementById("down-icon-5").classList.contains("left-icon-5")
    ) {
        document.getElementById("down-icon-5").classList.remove("left-icon-5");
        document.getElementById("down-icon-5").classList.add("down-icon-5");
    } else if (
        document.getElementById("down-icon-5").classList.contains("down-icon-5")
    ) {
        document.getElementById("down-icon-5").classList.remove("down-icon-5");
        document.getElementById("down-icon-5").classList.add("left-icon-5");
    }
}
function toggleDownArrowSix() {
    if (
        document.getElementById("down-icon-6").classList.contains("left-icon-6")
    ) {
        document.getElementById("down-icon-6").classList.remove("left-icon-6");
        document.getElementById("down-icon-6").classList.add("down-icon-6");
    } else if (
        document.getElementById("down-icon-6").classList.contains("down-icon-6")
    ) {
        document.getElementById("down-icon-6").classList.remove("down-icon-6");
        document.getElementById("down-icon-6").classList.add("left-icon-6");
    }
}
function toggleDownArrowSeven() {
    if (
        document.getElementById("down-icon-7").classList.contains("left-icon-7")
    ) {
        document.getElementById("down-icon-7").classList.remove("left-icon-7");
        document.getElementById("down-icon-7").classList.add("down-icon-7");
    } else if (
        document.getElementById("down-icon-7").classList.contains("down-icon-7")
    ) {
        document.getElementById("down-icon-7").classList.remove("down-icon-7");
        document.getElementById("down-icon-7").classList.add("left-icon-7");
    }
}
