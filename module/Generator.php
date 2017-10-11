<?php

namespace upch\gii\module;

class Generator extends \yii\gii\generators\module\Generator {

    public $template = 'upch';

    public function getName() {
        return 'Module UPCH Generator';
    }

    public function getDescription() {
        return 'Generador de Modulos para UPCH';
    }

}
