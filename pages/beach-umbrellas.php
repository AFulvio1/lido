<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dbconn = pg_connect("host=localhost dbname=lido
                    password=postgresql user=postgres port=5432")
                    or die(pg_last_error());
        $query = "SELECT * FROM BEACH_UMBRELLAS";
        $result = pg_query($dbconn, $query);
        while($tuple = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach($tuple as $col_name => $value) {
                echo "\t\t<td>";
                echo $value;
                echo "</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo ">/table>";
        pg_close($dbconn);
    ?>
</body>
</html>