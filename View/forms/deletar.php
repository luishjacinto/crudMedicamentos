<?php include('View/header.php'); ?>
<title>Farmácias Luizinho Guanabara</title>
    <div id="menu">
        <h1>Deletar Medicamento</h1>
        <form action="/deletar_medicamento" method="post">
            <select name="medicamento">
                <?php echo $data ?>
            </select>
            <input type="submit" value="Deletar" required>
        </form>

    </div>
<?php include('View/footer.php'); ?>