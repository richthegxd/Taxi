document.getElementById("exit").addEventListener("click",function(){
        let logoutRequest = new XMLHttpRequest;
        logoutRequest.open("POST","../php/logout.php",false);
        logoutRequest.send(null);
        if (logoutRequest.responseText == "Success") {
            window.location.replace("../allBook.php");
        } 
    }
)
document.addEventListener("click",function(oe){
        if(oe.target.id == "deny_book") {
            oe.preventDefault();
            let denyRequest = new XMLHttpRequest,
            denyForm = new FormData(oe.target.parentElement.parentElement);
            denyRequest.open("POST","php/deny.php",false)
            denyRequest.send(denyForm);
            if(denyRequest.responseText == "Deny: success") {
                oe.target.parentElement.parentElement.parentElement.remove();
            }
        }
    }
)
document.addEventListener("click",function(oe){
        if(oe.target.id == "accept_book") {
            oe.preventDefault();
            let acceptRequest = new XMLHttpRequest,
            acceptForm = new FormData(oe.target.parentElement.parentElement);
            acceptRequest.open("POST","php/deny.php",false)
            acceptRequest.send(acceptForm);
            if(acceptRequest.responseText == "Deny: success") {
                oe.target.parentElement.parentElement.parentElement.remove();
            }
        }
    }
)
const buttModal = document.querySelectorAll(".open_modal"),
allModal = document.querySelectorAll(".modal");

for(let i = 0; i < buttModal.length; i++){
    buttModal[i].addEventListener("click",function(){
        for(let j = 0; j < allModal.length; j++ )
            if(allModal[j].id == this.dataset.id) {
                allModal[j].style.display = "flex";
            } else {
                allModal[j].style.display = "none";
            }
        }
    )
}

document.addEventListener("click",function(oe){
        if(oe.target.classList[0] == "modal") {
            oe.target.style.display = "none";
        }
    }
)

document.addEventListener("click",function(oe){
        if(oe.target.id == "deny_book") {
            oe.preventDefault();
            oe.target.parentElement.parentElement.parentElement.style.display = "none";
        }
    }
)

const submitButtons = document.querySelectorAll(".accept_book");

for(var b = 0; b < submitButtons.length; b++) {
        submitButtons[b].addEventListener("click",function(oe){
            oe.preventDefault();
            let submitRequest = new XMLHttpRequest,
            submitForm = new FormData(document.getElementById(this.dataset.id));
            submitRequest.open("POST","php/" + this.dataset.id +".php",false)
            submitRequest.send(submitForm);
            document.getElementById(this.dataset.id+"_status").innerHTML = submitRequest.responseText;
            if (submitRequest.responseText == "Success") {
                document.getElementById(this.dataset.id+"_status").style.color = "green"
            } else {
                document.getElementById(this.dataset.id+'_status').style.color = 'red'
            }
        }
    )
}