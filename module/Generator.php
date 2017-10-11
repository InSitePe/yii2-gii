<?php

namespace upch\gii\generators\module;

use yii\gii\generators\module\Generator;

class Generator extends Generator {

    public $template = 'upch';

    public function getName() {
        return 'Module UPCH Generator';
    }

    public function getDescription() {
        return 'Generador de Modulos para UPCH';
    }

}
