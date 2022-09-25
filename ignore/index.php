<?php
    require 'parts/header.php';
?>
    <div class="access_screen">
        <div id="time_now">
            <?php echo date("d/m/Y H:i:s") ?>
        </div>    
        <form action="record.php" id="form_access">
            <input type="text" name="access" id="access" onkeydown="entrar()" autofocus>
            <input type="submit" value="Entrar">
        </form>
    </div>
<?php
    require 'parts/footer.php';
?>