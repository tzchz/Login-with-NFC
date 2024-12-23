<?php
session_start();
if(!isset($_SESSION['username'])){
    echo '<script>
    alert("Please login first!");
    location = "login.htm";
    </script>
    ';
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Github@tzchz/Login-with-NFC</title>
        <link rel="icon" href="https://assets.060418.best/favicon.ico">
        <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,user-scalable=no,minimum-scale=1.0,maximum-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: auto;
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                color: #007bff;
            }
            .button {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s;
            }
            .button:hover {
                background-color: #0056b3;
            }
            .footer {
                text-align: center;
                margin-top: 20px;
                font-size: 14px;
                color: #777;
            }
            #top-right-corner {
                position: fixed;
                top: 0;
                right: 0;
            }
        </style>
    </head>
    <body>
        <div class="container" style="display: flex; justify-content: center; align-items: center;">
            <div style="flex: 1; display: flex; justify-content: flex-start;">
                <a href="."> &lt; Back</a>
            </div>
            <div style="flex: 1; display: flex; justify-content: center;">
                <a href="index.php">Home</a>
            </div>
            <div style="flex: 1; display: flex; justify-content: flex-end;">
            </div>
        </div>
        <br>
        <div class="container">
            <h1>Home</h1>
            <b>Success!</b>
            <br>
            <p>You've logged in as <b><?php echo $_SESSION['username']; ?></b></p>
        </div>
        <footer class="footer">
            <p>Made with ❤ by <a href="https://github.com/tzchz">@tzchz</p>
        </footer>
        <div id="top-right-corner">
            <a href="https://github.com/tzchz/login-with-nfc">
                <img decoding="async" width="149" height="149" src="https://github.blog/wp-content/uploads/2008/12/forkme_right_darkblue_121621.png" class="attachment-full size-full" alt="Fork me on GitHub" loading="lazy">
            </a>
        </div>
    </body>
</html>
