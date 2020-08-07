<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php print $PAGE_TITLE; ?></title>

<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Lato|Montserrat|Roboto|Roboto+Mono|Varela+Round&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">

<link rel="stylesheet" href="<?php 
switch ($CURRENT_PAGE) {
    case "Index":
        print "css/main-page-contents.css";
        break;
    case "Resume":
        print "css/resume.css";
        break;
}
?>">