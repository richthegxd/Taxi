document.getElementById("openMenu_butt").addEventListener("click",function(){
        openMenu("mob_menu");
    }
)
document.getElementById("mob_menu").addEventListener("click",function(){
        closeMenu("mob_menu");
    }
)

const menuButt = document.querySelectorAll('.nav_button');
for(let j = 0; j < menuButt.length;j++) {
    menuButt[j].addEventListener("click",function(){
            closeMenu("mob_menu")
        }
    )
}

function openMenu(idMenu) {
    document.getElementById(idMenu).style.display = "flex";
    setTimeout(function(){
            document.getElementById(idMenu).style.opacity = "1"
        },1
    )
}

function closeMenu(idMenu) {
    document.getElementById(idMenu).style.opacity = "0"
    setTimeout(function(){
            document.getElementById(idMenu).style.display = "none";
        },400
    )
}