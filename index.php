<?php

require_once('functions.php');

$db = connectDB();

$sets = pullSetNames($db);
$setSize = pullSetSize($db);
$releaseDate = pullSetRelease($db);

?>

<html>
<head>
    <body>

</body>
</head>
</html>
