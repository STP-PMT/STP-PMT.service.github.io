

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    <?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();
$app->setBasePath('/Web-Developer/web-service');
require __DIR__ . '/api/connect.php';
require __DIR__ .'/api/order.php';
require __DIR__ . '/api/menu.php';
require __DIR__ . '/api/table.php';
require __DIR__ . '/api/bill.php';


$app->run();
?>
    </script>
</body>
</html>