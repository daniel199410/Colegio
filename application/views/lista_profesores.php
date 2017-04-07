
    <div class="content-wrapper mt-24">
        <h1 class="center-text">Lista de estudiantes</h1>
        <table class="center-align">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
            <?php foreach($estudiantes as $estudiante): ?>
                <tr>
                    <td><?= $estudiante->id ?></td>
                    <td><?= $estudiante->nombre ?></td>
                    <td><?= $estudiante->edad ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>