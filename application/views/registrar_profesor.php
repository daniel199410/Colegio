<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h1>Registro Profesor</h1>
<?= form_open('Registrar_profesor/registrar') ?>
    <div> 
        <?= form_label('Cédula: ', 'cedula'); ?>
        <?= form_input('cedula', $back['cedula'], ['id' => 'cedula']); ?>
    </div>
    <div> 
        <?= form_label('Nombre: ', 'nombre'); ?>
        <?= form_input('nombre', $back['nombre'], ['id' => 'nombre']); ?>
    </div>
    <div> 
        <?= form_label('Fecha de nacimiento: ', 'fecha_nacimiento'); ?>
        <?= form_input('fecha_nacimiento', $back['fecha_nacimiento'], ['id' => 'fecha_nacimiento']); ?>
    </div>
    <div> 
        <?= form_label('Lugar de nacimiento: ', 'lugar_nacimiento'); ?>
        <?= form_input('lugar_nacimiento', $back['lugar_nacimiento'], ['id' => 'lugar_nacimiento']); ?>
    </div>
    <div> 
        <?= form_label('Título: ', 'titulo'); ?>
        <?= form_input('titulo', $back['titulo'], ['id' => 'titulo']); ?>
    </div>
    <div> 
        <?= form_label('Departamento: ', 'departamento'); ?>
        <?= form_input('departamento', $back['departamento'], ['id' => 'departamento']); ?>
    </div>
    <?= form_submit('', 'Registrar', ['class'=>'blue blue-hover white-text']); ?>
<?= form_close() ?>
<div>
    <?php if(!empty($errores))foreach ($errores as $error): ?>
        <p><?= $error ?></p>
    <?php endforeach; ?>
<div>