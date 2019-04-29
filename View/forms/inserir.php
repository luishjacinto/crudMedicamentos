<?php include('View/header.php'); ?>
<title>Farmácias Luizinho Guanabara</title>
    <div id="menu">
        <h1>Inserir Medicamento</h1>
        <form action="/criar_medicamento" method="post">
            Nome:
            <input type="text" name="nome" required><br>
            Fabricante:
            <input type="text" name="fabricante" required><br><br>
            Controlado:
            <select name="controlado">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select><br>
            Quantidade:
            <input type="number" name="qt" required><br>
            Preço:
            <input type="number" name="preco" required><br>
            
            <input type="submit" value="Inserir" required>

        </form>

    </div>
<?php include('View/footer.php'); ?>