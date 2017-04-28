<?php
use controllers\home\examples\App;
class HomeModel extends BaseModel
{
    function lesson()
    {
        spl_autoload_register(function () {
            require_once "./controllers/home/examples/Models/Exercise.php";
            require_once "./controllers/home/examples/App.php";
        });

        $app = new App();
        $result = $app->start();
        return $result;
    }
}
