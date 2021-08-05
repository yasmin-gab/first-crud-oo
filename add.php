<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Contacts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <header>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php"><img src="assets/img/home.png" /></a>
                        <ul>
                            <li class="submenu">Home</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Add New Contact</h1><br/>

        <form method="POST" action="add_submit.php" >
            <label>Name:
            <input type="text" name="name" autofocus autocomplete="off" minlength="3"/>
            </label>

            <label>E-mail:
            <input type="email" name="email" required/>
            </label>

            <input type="submit" value="Add Contact" />
        </form>
    </div>
</body>
</html>