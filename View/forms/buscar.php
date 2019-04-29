<?php include('View/header.php'); ?>
<title>Farmácias Luizinho Guanabara</title>
    <div id="menu">
        <h1>Buscar Medicamentos</h1>
        Buscar por Nome:
        <form action="/buscar_nome" method="post">
            <input type="text" name="nome" required>
            <input type="submit" value="Buscar">
        </form>
        <br>
        Buscar por Fabricante:
        <form action="/buscar_fabricante" method="post">
            <select name="fabricante">
                <?php echo $data ?>
            </select>
            <input type="submit" value="Buscar" required>
        </form>
        <br>
        Buscar por Controle:
        <form action="/buscar_controle" method="post">
            <select name="medicamento">
                <option value="0">Sim</option>
                <option value="1">Não</option>
            </select>
            <input type="submit" value="Buscar" required>
        </form>
        <br>
        <a href="/buscar_qt5"><button>Medicamentos com menos de 5 unidades</button></a>
        <a href="/buscar_preco"><button>Lista de Medicamentos ordenados por preço</button></a>
        <a href="/buscar_qt"><button>Lista de Medicamentos ordenados por quantidade</button></a>

    </div>
<?php include('View/footer.php'); ?>