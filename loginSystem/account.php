<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "You are not authorized to view this page. Go back <a href= '/ARJS/newApp'>home</a>";
    exit();
}
require 'header.php'
?>

<body>
    <nav class="navbar navbar-expand-sm bg-light mb-4">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="./logout.php">Logout</a>
            </li>
        </ul>
    </nav>
    <h1>Welcome to the Account Page, <?php echo $_SESSION['username'] ?></h1>

    <button onclick="ARGame()">AR GAME</button>
    <button onclick="addObject()">ADD OBJECT</button>
    </div>
</body>
<script>
    addObject = () => {
        window.location.href = "/ARJS/newApp/maps/maps.html";
    }
    ARGame = () => {
        window.location.href = "/ARJS/newApp/game/game.html";
    }
</script>
<style>
    body {
        background-color: #f2f2f2;
    }

    button {
        margin: 10px;
        width: 40%;
        padding: 10px;
    }

    html,
    body {
        height: 100%;
        overflow: hidden;
    }
</style>

</html>