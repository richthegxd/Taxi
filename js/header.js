document.addEventListener("scroll",function(){
        setHeader("main_header","active_header",100)
    }
)

function setHeader(firstId,secondId,triggerPosition) {
    if(pageYOffset > triggerPosition) {
        if(document.getElementById(firstId)) {
            document.getElementById(firstId).id = secondId;
        }  
    } 
    else if(pageYOffset < triggerPosition){
        if(document.getElementById(secondId)) {
            document.getElementById(secondId).id = firstId;
        } 
    }
}