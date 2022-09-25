<?php     require 'config/verifySession.php'; ?>
<link rel="stylesheet" href="assets/css/style.menu.css">
<body>
    <header>
        <h3 id="logo">Gerenciador de acesso</h3>
        <label for="check-menu">
            <ion-icon name="menu-outline" id="mobile_btn" onclick="menuToggle()"></ion-icon>
        </label>
        <a href="exit.php" id="sair_btn">Sair</a>
    </header>
    <nav>
        <div class="photo">
            <img src="assets/img/user<?=$_SESSION['user_photo'];?>">
            <h2> <?=$_SESSION['name'];?> </h2>
        </div>
        <ul class="menu">
            <li><a href="forms/addUser.php">Adicionar novo usuário</a></li>
            <li id="alter_user">
                <a>Alterar dados do usuário</a>
                <ul class="sub_menu">
                    <li id="edit_user_name">
                        <a>filtrar por nome</a>
                        <form action="filters/filterByNameUser.php" method="POST" id="edit_form_name" class="form_menu">
                            <input type="text" name="filter_name_user" id="filter_name_user" placeholder="digite o nome">
                            <input type="submit" value="Buscar">
                        </form>
                    </li>
                    <li id="edit_user_id">
                        <a>filtar por id</a>
                        <form action="filters/filterByIdAccessUser.php" id="edit_form_id" class="form_menu" method="POST">
                            <input type="text" name="filter_id_access" id="filter_id_access" placeholder="digite o id">
                            <input type="submit" value="Buscar">
                        </form>
                    </li>
                    <li id="edit_user_email">
                        <a>filtar por e-mail</a>
                        <form action="filters/filterByEmailUser.php" id="edit_form_email" class="form_menu" method="POST">
                            <input type="text" name="filter_email_user" id="filter_email_user" placeholder="digite o email">
                            <input type="submit" value="Buscar">
                        </form>
                    </li>
                </ul>     
            </li>

            <!--<li id="del_user">
                <a>Excluir usuário</a>
                <ul class="sub_menu">
                    <li id="del_user_name">
                        <a>filtar por nome</a>
                        <form action="" id="del_form_name" class="form_menu">
                            <input type="text" placeholder="digite o nome">
                            <input type="submit" value="Buscar">
                        </form>
                    </li>
                    <li id="del_user_id">
                        <a>filtar por id</a>
                        <form action="" id="del_form_id" class="form_menu">
                            <input type="text" placeholder="digite o id">
                            <input type="submit" value="Buscar">
                        </form>
                    </li>
                    <li id="del_user_email">
                        <a>filtar por e-mail</a>
                        <form action="" id="del_form_email" class="form_menu">
                            <input type="text" placeholder="digite o email">
                            <input type="submit" value="Buscar">
                        </form>
                    </li>
                </ul>    
            </li>-->
    </nav>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.menu.js"></script>
</body>
</html>