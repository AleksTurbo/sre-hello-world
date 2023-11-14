<?php

$dbHost = $_ENV['POSTGRES_HOST'];
$dbName = $_ENV['POSTGRES_DB'];
$dbUser = $_ENV['POSTGRES_USER'];
$dbPass = $_ENV['POSTGRES_PASSWORD'];

$c = new PDO("pgsql:dbname=$dbName;host=$dbHost", $dbUser, $dbPass);

$sql = "select id, name from author";
$result = [];
foreach ($c->query($sql) as $row) {
    $result[] = [
        'id' => $row['id'],
        'name' => $row['name'],
    ];
}

$env = $_ENV;
ksort($env);

?>
<html>
<head>
    <title>SRE Hello World</title>
    <style>
        img {
            width: 300px;
            height: auto;
            display: block;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
            line-height: 1.5;
        }
        pre, code {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }
    </style>
</head>
<body>
<img src="title.jpg" alt="SRE Hello World" />
<h1>Data from the table <code>`author`</code></h1>
<pre>
===|======
id | name
---|------
<?php foreach ($result as $row) { echo " {$row['id']} | {$row['name']}\n"; } ?>
</pre>
<h1>Debug of ENV vars</h1>
<pre>
<?php foreach ($env as $key => $value) { echo "$key=$value\n"; } ?>
</pre>
</body>
