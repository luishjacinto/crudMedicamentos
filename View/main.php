<?php include('View/header.php'); ?>
<title>Farmácias Luizinho Guanabara</title>
    <div id="menu">
        <h1>FARMÁCIAS LUIZINHO GUANABARA</h1>
        <form action="/opcoes" method="post">
            O que desejas? 
            
            <select name="select" id="select">
                <option value="inserir">Inserir Medicamento</option>
                <option value="deletar">Deletar Medicamento</option>
                <option value="buscar">Buscar Medicamento</option>
                <option value="editar">Editar Medicamento</option>
            </select>
            
            <input type="submit" value="Submeter">

        </form>

    </div>
<?php include('View/footer.php'); ?>