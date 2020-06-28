document.getElementById("submit_book").addEventListener("click",function(oe){
        oe.preventDefault();
        let bookRequest = new XMLHttpRequest,
        bookForm = new FormData(submitForm);
        bookRequest.open("POST","../php/insertBook.php",false);
        bookRequest.send(bookForm);
        document.getElementById("status_send").innerHTML = bookRequest.responseText;
        if(bookRequest.responseText == "Your booking request has been sent.") {
            document.getElementById("status_send").style.color = "green"
        } else {
            document.getElementById("status_send").style.color = "red"
        }
    }
)
