<?php

require_once 'Smarty.class.php';

class SmartyFactory {

    public static function createInstance() {
      //  fb(SMARTY);
        $smarty = new Smarty();
        $smarty->setTemplateDir(SMARTY . '/demo/templates/');
        $smarty->setCompileDir(SMARTY . '/demo/templates_c/');
        $smarty->setConfigDir(SMARTY . '/demo/configs/');
        $smarty->setCacheDir(SMARTY . '/demo/cache/');
        $smarty->left_delimiter="{[";
        $smarty->right_delimiter=']}';  
        return $smarty;
    }
    
    

}
?>