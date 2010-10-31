<?php
    $configVars = parse_ini_file('config/config.ini', TRUE);
    //accessing config variable
    echo $configVars['Database']['username'];
    echo $configVars['Database']['passwd'];
echo "VIEW STATS";
?>
