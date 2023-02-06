<?php
global $config,$lang,$link;
if(!checkloggedin()){
  headerRedirect($link['LOGIN']);
}



//Print Template 'become an advisor Page'
HtmlTemplate::display("become-an-advisor", array(
    
));

?>