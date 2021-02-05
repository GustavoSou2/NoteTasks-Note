
<header>
    <div id="container-logo">
        <h1>NoteTasks</h1>
    </div>
    <div id="container-button-user">
        <div class="sub-container-button-user">
            <span id="user-name"><?php echo $_SESSION['name']; ?> <i class="fa fa-user-circle-o"></i></span>
            <div id="log-out-user">
                <a href="../src/model/log-out.php">Sair</a>
            </div>
        </div>
    </div>
</header>