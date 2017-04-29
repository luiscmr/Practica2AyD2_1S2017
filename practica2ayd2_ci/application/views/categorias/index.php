<h2><?php echo $title; ?></h2>
<h5><a href="<?php echo site_url('categorias/create'); ?>">Crear</a></h5>
 <table border="1">
            
    <tr>
        <td>No.</td>
        <td>Categoria</td>
        <td>Operaciones</td>
    </tr>
     <?php foreach ($categorias as $categoria): ?>
     <tr>
         <td>
             <h3><?php echo $categoria['ayd2_categoria_id']; ?></h3>
         </td>
         <td>
             <div class="main">
                    <?php echo $categoria['ayd2_categoria_descripcion']; ?>
             </div>
         </td>
         <td>
             <p><a href="<?php echo site_url('categorias/'.$categoria['ayd2_categoria_descripcion']); ?>">Ver</a></p>
         </td>
         
     </tr>
    <?php endforeach; ?>

                 
</table>
