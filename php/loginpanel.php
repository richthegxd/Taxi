<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form id='submitForm' action=''>
    <div class='placeholder_block_book'>
        <h6 class='placeholder_block_content'>Log in <span class='color_book'>admin</span></h6>
    </div>
    <div class='inputs_book'><input maxlength='30' name='Login' class='book_input' placeholder='Login' type='text'><input maxlength='30' name='Password' placeholder='Password' id='phone' class='book_input' type='tel'></div>
    <p id='status_send'></p>
    <button id='submit_book' class='read_more_book'>Enter </button>
</form>
<script>
    document.getElementById("submit_book").addEventListener("click",function(oe){
            oe.preventDefault();
            let loginRequest = new XMLHttpRequest,
                loginForm = new FormData(submitForm);
            loginRequest.open('POST', '../php/login.php', false);
            loginRequest.send(loginForm);
            console.log(loginRequest.responseText);
            document.getElementById("status_send").innerHTML = loginRequest.responseText;
            if (loginRequest.responseText == "Success") {
                window.location.replace("../allBook.php");
                document.getElementById("status_send").style.color = "green"
            } else {
                document.getElementById('status_send').style.color = 'red'
            }
        }
    )
</script>
</body>
</html>