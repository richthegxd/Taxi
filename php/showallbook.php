<?php
    $connect = mysqli_connect('localhost', 'root', '', 'Taxi');

    $deletestatus = mysqli_query($connect, "DELETE FROM `books` WHERE Status = 0");
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        if($_COOKIE['login'] == 1) {
            echo ''; ?>
    <style>
        body {
            padding-top: 100px;
        }
    </style>
    <div id='addAdminBlock' class="modal">
        <form id="addadmin">
            <h6>Add admin</h6>
            <div class='inputs_book'>
                <input maxlength='30' name='Login' class='modal_input' placeholder='Login' type='text'>
                <input maxlength='30' name='Password' placeholder='Password' class='modal_input' type='password'>
            </div>
            <p id='addadmin_status' class="status"></p>
            <div class="button_book">
                <button data-id="addadmin" id="addAdminButt" class="accept_book read_more_book">
                    Add admin  
                </button>
                <button id="deny_book" class="deny_book read_more_book">
                    Cancel  
                </button>
            </div>
        </form>
    </div>
    <div id='removeAdminBlock' class="modal">
        <form id="removeadmin">
            <h6>Remove admin</h6>
            <div class='inputs_book'>
                <input maxlength='30' name='Login' class='modal_input' placeholder='Login' type='text'>
            </div>
            <p id='removeadmin_status' class="status"></p>
            <div class="button_book">
                <button data-id="removeadmin" id="removeAdminButt" class="accept_book read_more_book">
                    Remove admin 
                </button>
                <button id="deny_book" class="deny_book read_more_book">
                    Cancel  
                </button>
            </div>
        </form>
    </div>
    <div id='changePasswordBlock' class="modal">
        <form id="changepassword">
            <h6>Change password</h6>
            <div class='inputs_book'>
                <input maxlength='30' name='Login' class='modal_input' placeholder='Login' type='text'>
                <input maxlength='30' name='OldPassword' class='modal_input' placeholder='Old password' type='password'>
                <input maxlength='30' name='NewPassword' class='modal_input' placeholder='New password' type='password'>
            </div>
            <p id='changepassword_status' class="status"></p>
            <div class="button_book">
                <button data-id="changepassword" id="changePassButt" class="accept_book read_more_book">
                    Change
                </button>
                <button id="deny_book" class="deny_book read_more_book">
                    Cancel  
                </button>
            </div>
        </form>
    </div>
    <header id='active_header'>
        <div class="header_content">
            <a data-id="addAdminBlock" class='open_modal nav_button'>Add admin</a>
            <a data-id="removeAdminBlock" class='open_modal nav_button'>Remove admin</a>
            <a data-id="changePasswordBlock" class='open_modal nav_button'>Change password</a>
            <a id='exit' class='nav_button'>Exit</a>
        </div>
    </header>
    <?php
        $result = mysqli_query($connect, 'SELECT * FROM `books`');
        $valuesubject = 0;
        while (@$row = mysqli_fetch_assoc($result)) {
            $valuesubject++;
            echo '';
        ?> 
        <div class="book_form">
        <form id="book_form" action="">
            <div class="placeholder_block_book">
            <h6 class="placeholder_block_content">
                Book №<span class="color_book"><?php echo "{$valuesubject}"?></span>    ID: <span class='color_book'><?php echo "{$row['idBook']}"?></span>
            </h6>
            </div>
            <div class="inputs_book">
                <p name="Name" class="book_input"><?php echo "{$row['NameBook']}"?></p>
                <p name="Phone" class="book_input"><?php echo "{$row['PhoneBook']}"?></p>
                <p name="When" class="book_input"><?php echo "{$row['WhenBook']}"?></p>
                <p name="Time" class="book_input"><?php echo "{$row['TimeBook']}"?></p>
                <p name="Start" class="book_input"><?php echo "{$row['StartBook']}"?></p>
                <p name="End" class="book_input"><?php echo "{$row['EndBook']}"?></p>
                <p name="Car" class="car_book book_input"><?php echo "{$row['Car']}"?></p>
                <input name="idBook" value="<?php echo "{$row['idBook']}" ?>" type="hidden">
            </div>
            <div class="button_book">
                <button id="accept_book" class="read_more_book">
                    Accept  
                </button>
                <button id="deny_book" class="read_more_book">
                    Deny  
                </button>
            </div>
        </form>
        </div>
        <?php }?>
        <script src="js/allbook.js"></script>

        <?php } 
        else {
            echo ""; ?>
            <style>
                body {
                    background: #ffc61a;
                    display: flex;
                    flex-flow: column;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    font-size: 50px;
                    font-family: Arial, Helvetica, sans-serif;
                }
                h6 {
                    margin: 20px 0;
                }
            </style>
            <h6>Fatal error!</h6>
            <h6>Please log in</h6>
        <?php }
        if(!$result){
            echo "<h6 style='color: black; font-size: 40px'>Нет заявок</h6>";
        } ?>
</body>
</html>