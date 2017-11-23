<?php

namespace insite\gii\module;

class Generator extends \yii\gii\generators\module\Generator {

    public function getName() {
        return 'Module Insite.pe Generator';
    }

    public function getDescription() {
        return 'Generador de Modulos para Insite.pe';
    }

    public function requiredTemplates() {
        return ['module.php', 'controller.php', 'view.php', 'assets.php'];
    }

    public function generate() {

        $files      = parent::generate();
        $modulePath = $this->getModulePath();
        $files[]    = new CodeFile(
                $modulePath . "/config/" . ucfirst($this->moduleID) . "Asset.php", $this->render("assets.php")
        );

        return $files;
    }

}
