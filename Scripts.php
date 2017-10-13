<?php

namespace upch\gii;

use Composer\Script\Event;

class Scripts {

    public static function ReqPaths(Event $event) {
        $webDir     = __DIR__ . "../../dist/web/assets";
        $assetsDir  = __DIR__ . "../../dist/web/assets";
        $runtimeDir = __DIR__ . "../../dist/runtime";

        $event->getIO()->write("Show me after INSTALL/UPDATE command");
        $event->getIO()->write($webDir);
        $event->getIO()->write($assetsDir);
        $event->getIO()->write($runtimeDir);

        print_r($webDir);

        if (!is_dir($webDir)) {
            mkdir($webDir, 755);
        }

        if (!is_dir($assetsDir)) {
            mkdir($assetsDir, 777);
        }

        if (!is_dir($runtimeDir)) {
            mkdir($runtimeDir, 777);
        }
    }

}
