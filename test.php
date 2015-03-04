<?php

echo "111";

$link = mysql_connect('agentpanelpro.cqdryledgmly.us-west-2.rds.amazonaws.com:3306','agentpanelpro', 'agentpanelpro');

echo "111";
$rv = mysql_select_db('agent_panel_pro', $link);

$sql = "select * from account";
$mysql = mysql_query($sql);

while ($row = mysql_fetch_array($mysql, MYSQL_NUM)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);
    echo "<br>";
}
