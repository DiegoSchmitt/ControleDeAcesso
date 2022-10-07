<div class="filter">
    <form action="filters/filterAccess.php" method="post" id="form_filter_access">
        <h2>Verificar acessos</h2>
        <label for="filter_name">
        <span class="material-symbols-outlined">
            person
        </span>
            <input type="text" placeholder="Digite o nome" name="filter_name" id="filter_name"><br><br>
        </label>

        <label for="filter_idAccess">
        <span class="material-symbols-outlined">
            badge
        </span>
            <input type="text" placeholder="Digite o id" name="filter_idAccess" id="filter_idAccess"><br><br>
        </label>

        <label for="filter_date">
        <span class="material-symbols-outlined">
            calendar_month
        </span>
            <input type="date" name="filter_date" id="filter_date"><br>
        </label>
        
        <label for="btn-filter">
            <span class="material-symbols-outlined">
                filter_alt
            </span>
            <input class="btn" type="submit" value="Filtrar" name="btn-filter" id="btn-filter">
        </label>
    </form>
</div>
