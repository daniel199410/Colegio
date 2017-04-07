<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content-wrapper mt-24">
    <h1 class="center-text">Lista de Profesores</h1>
    <table class="center-align">
        <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>
            <th>Lugar de nacimiento</th>
            <th>Título</th>
            <th>Departamento</th>
        </tr>
        <?php foreach($profesores as $profesor): ?>
            <tr>
                <td><?= $profesor->cedula ?></td>
                <td><?= $profesor->nombre ?></td>
                <td><?= $profesor->fecha_nacimiento ?></td>
                <td><?= $profesor->lugar_nacimiento ?></td>
                <td><?= $profesor->titulo ?></td>
                <td><?= $profesor->departamento ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>