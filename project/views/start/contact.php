<?php use Core\Helpers\FormHelper;?>

<?php $form = new FormHelper; ?>
<h1 align="center">Contact us</h1>
<br>
<div align="center">
    <?php echo $form->openForm(['method'=>'POST', 'action' => '', 'style'=>'padding-top: 5%;']); ?>
    Имя:
    <br>
    <?php echo $form->input(['id' => 'name', 'style'=>'width: 200px;']); ?>
    <br><br>
    E-mail:
    <br>
    <?php echo $form->input(['id' => 'email', 'style'=>'width: 200px;']); ?>
    <br><br>
    Сообщение:
    <br>
    <?php echo $form->textArea(['name' => 'testArea', 'style'=>'width: 200px; height: 100px;']); ?>
    <br>
    <br>
    <?php echo $form->submit(); ?>
<div>

<?php echo $form->closeForm(); ?>
