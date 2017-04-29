<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Categorias</title>
    </head>
    <body>
        <a href="<?php echo base_url(); ?>index.php/categoria/add_view">add</a>
        <table border="1">
            
            <?php 
                $i = 1;
                echo "<tr>";
                echo "<td>No.</td>";
                echo "<td>Categoria</td>";
                echo "<td>Operaciones</td>";
                echo "</tr>";
                
                foreach($records as $r){
                    echo "<tr>";
                    echo "<td>".$i++."</td>";
                    echo "<td>".$r->ayd2_categoria_descripcion."</td>";
                    echo "<td>Ver | Editar | Eliminar </td>";
                    echo "</tr>";
                }
            ?>
            
        </table>
    
    </body>
</html>