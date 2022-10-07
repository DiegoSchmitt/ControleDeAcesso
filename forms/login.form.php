<div class="login">
    <form method="post" action="forms/login.action.php">
        <h3>
            <span class="material-symbols-outlined">
                login
            </span>
            Login
        </h3>
        <label for="email">
            <span class="material-symbols-outlined">
                mail_lock
            </span>
            <input type="email" name="email" id="email" placeholder="Seu e-mail..." autofocus/><br/>
        </label>
        <label for="password">
            <span class="material-symbols-outlined">
                lock
            </span>
            <input type="password" name="password" id="password" placeholder="Sua senha..."/><br/>
        </label>
        <label>
            <span class="material-symbols-outlined">
                start
            </span>
            <input type="submit" class="btn" value="Entrar"><br/><br/>
        </label>
        <label>
            <span class="material-symbols-outlined">
                sync_lock
            </span>
            <a href="formNewPassword.php">Alterar a senha</a>
        </label>
    </form>
</div>


