<?php
    require 'parts/header.php';
?>
    <div class="access_screen">
        <div id="time_now">
            
        </div>    
        <form action="record.php" id="form_access">
            <input type="text" name="access" id="access" oninput="entrar()" autofocus>
            <input type="submit" id="btn-access" value="Entrar">
        </form>
    </div>
<?php
    require 'parts/footer.php';
?>