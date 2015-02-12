<?php 

@mysql_connect("","root","root") or die("Database ile baglanti kurulamadi.");
@mysql_select_db("pyro") or die("Database baglantisi kurulurken sorun olustu.");

mysql_query("set character set utf8");