<?php

@mysql_connect("localhost", "ta10_user", "KAikjotja2010") OR
die("DB server kättesaamatu");

@mysql_select_db("ta10") OR
die("DB kättesaamatu");

?>