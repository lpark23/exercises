<?php
use controllers\home\examples\App;

abstract class BaseModel
{
    protected static $db;
    protected $validationErrors = [];

    public function __construct()
    {
        //DB connection
        /*if (self::$db == null) {
            self::$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            self::$db->set_charset("utf8");
            if (self::$db->connect_errno) {
                die('Cannot connect to database');
            }
        }*/
    }

    function addMessage(string $msg, string $type)
    {
        if (!isset($_SESSION['messages'])) {
            $_SESSION['messages'] = array();
        };
        array_push($_SESSION['messages'],
            array('text' => $msg, 'type' => $type));
    }

    function addInfoMessage(string $infoMsg)
    {
        $this->addMessage($infoMsg, 'info');
    }

    function addErrorMessage(string $errorMsg)
    {
        $this->addMessage($errorMsg, 'error');
    }

    function setValidationError(string $fieldName, string $errorMsg)
    {
        $this->validationErrors[$fieldName] = $errorMsg;
    }

    function formValid() : bool
    {
        return count($this->validationErrors) == 0;
    }

}
