<?php
require_once 'siteFunctions/masterPage.php';
$pg=new MasterPage();
if ($pg->getUser()!=null) {
    header("location:userPage.php");
} else {
    print $pg->getHtml();
}