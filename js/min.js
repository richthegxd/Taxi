$(".slider_button").click(function () {
        $(".slider_button").not(this).removeClass("sb_active");
        $(this).toggleClass("sb_active");
    }
);
$(function(){
    $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top - 89 +"px"});
            return false;
            }
        );
    }
);
const allInput = document.querySelectorAll(".book_input");

for(let a = 0; a < allInput.length; a++){
    allInput[a].addEventListener("blur",function(){
            if(this.value == '') {
                this.style = "border-bottom: .3vh solid #e4e4e4"
            } else {
                this.style = "border-bottom: .3vh solid #ffc61a"
            }
        }
    )
}

setTimeout(function(){
    window.scrollTo(0, 0);
}, 1);
Revealator.effects_padding = '-150';

setTimeout(function(){
        const menuButton = document.querySelectorAll("#navButton")
        let j = 1;
        for(let i = 0; i < menuButton.length; i++) {
            j++;
            menuButton[i].classList.remove("revealator-delay" + j)
        }
    },600
)