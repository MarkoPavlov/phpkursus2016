<?php

  @mysql_connect("localhost", "kursus1102", "EmMoKkNv12345") OR
  die("andmebaasi server k�ttesaamatu");

  @mysql_select_db("kursus1102") OR
  die("andmebaas k�ttesaamatu");

?>