<h1 class="page-header">Profesores</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Profesor&a=Crud">Nuevo Profesor</a>
</div>


    <table class="table table-striped">
    <thead>
        <tr>
            <th style="width:110;">Nombre</th>
            <th style="width:110;">Apellido</th>
            <th style="width:110;">Correo</th>
            <th style="width:110;">Sexo</th>
            <th style="width:110;">Licenciatura</th>
            <th style="width:110;">Nacimiento</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre_p; ?></td>
            <td><?php echo $r->apellido_p; ?></td>
            <td><?php echo $r->correo_p; ?></td>
            <td><?php echo $r->sexo_p == 1 ? 'Hombre' : 'Mujer'; ?></td>
            <td><?php echo $r->licenciatura; ?></td>
            <td><?php echo $r->fecha_nacimiento; ?></td>
            <td>
                <a href="?c=Profesor&a=Crud&id=<?php echo $r->id_p; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Profesor&a=Eliminar&id=<?php echo $r->id_p; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 



