<?php

class DisplayPHPVersion extends Controller
{

    private $moduleName = "display_php_version";

    public function accordionLayout()
    {
        return Template::executeModuleTemplate($this->moduleName, "phpversion.php");
    }
}