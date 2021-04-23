<h1 class="page-header">
    <?php echo $almp->id != null ? $almp->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Profesor">Profesores</a></li>
  <li class="active"><?php echo $almp->id != null ? $almp->Nombre : 'Nuevo Registro'; ?></li>
</ol>

   <form id="frm-profesor" action="?c=Profesor&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $almp->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $almp->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $almp->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $almp->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <div class="form-group">
        <label>Sexo</label>
        <select name="Sexo" class="form-control">
            <option <?php echo $almp->Sexo == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
            <option <?php echo $almp->Sexo == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
        </select>
    </div>

    <div class="form-group">
        <label>Licenciatura</label>
        <input type="text" name="licenciatura" value="<?php echo $almp->Licenciatura; ?>" class="form-control" placeholder="Ingrese su Profesion" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input readonly type="text" name="FechaNacimiento" value="<?php echo $almp->FechaNacimiento; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
    </div>

    
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-profesor").submit(function(){
            return $(this).validate();
        });
    })
</script> 

