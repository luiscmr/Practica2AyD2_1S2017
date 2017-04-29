<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('Categoria_controller/create'); ?>

    <label for="descripcion">Descripcion</label>
    <input type="input" name="descripcion" /><br />

    <input type="submit" name="submit" value="Crear" />

</form>