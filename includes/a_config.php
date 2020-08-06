<?php 

switch($_SERVER["SCRIPT_NAME"]) {

    case "/resume.php":
        $CURRENT_PAGE = "Resume";
        $PAGE_TITLE = "Thiago's Resume";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Thiago's Portfolio";
        break; 
}


?>