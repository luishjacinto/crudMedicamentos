<?php include('View/header.php'); ?>
<title>Farmácias Luizinho Guanabara</title>
    <div id="menu">
        <h1>Editar Medicamento</h1>
        <form action="/atualizar_form" method="post">
            <select name="medicamento">
                <?php echo $data ?>
            </select>
            <input type="submit" value="Editar este Medicamento" required>
        </form>

    </div>
<?php include('View/footer.php'); ?>