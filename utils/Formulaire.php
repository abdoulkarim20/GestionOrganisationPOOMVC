<?php
class Formulaire
{
    //cette function me permet de gener des champs de formulaire en donnant des argument que je veux
    public function divForm($label, $type, $value, $name)
    { ?>
        <div class="form-group">
            <label for="exampleInputEmail1"><?= $label; ?></label>
            <input type="<?= $type; ?>" class="form-control" name="<?= $name; ?>" value="<?= $value; ?>" id="exampleInputEmail1">
        </div>
<?php  }
}

?>