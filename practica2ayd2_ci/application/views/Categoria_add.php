<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Agregar Categoria</title>
    </head>
    <body>
    
        <form method="" action="">
            <?php
                echo form_open('Categoria_controller/add_categoria');
                echo form_label('Categoria: ');
                echo form_input(array('id'=>'categoria', 'name'=>'categoria'));
                echo "<br/>";
                echo form_submit(array('id'=>'submit', 'value'=>'Agregar'));
                echo form_close();
            ?>
        </form>
        
    </body>

</html>