<?php
    function isVoid($variable)
    {
    return empty(trim($variable));
    }
    function isProduct($variable)
    {
        return preg_match('/^PROD[0-9]{5}$/',$variable);
    }
    function isText($variable)
    {
        return preg_match('/^(([a-zA-Záéíóúñ0-9_.-]+)[ ]?([a-zA-Záéíóúñ0-9_.-]+)?)+$/',$variable);
    }
    function isInteger($variable)
    {
        return preg_match('/^[0-9]+$/',$variable);
    }
    function isFloat($variable)
    {
        return preg_match('/^[0-9]+[.]?[0-9]?+$/',$variable);
    }
    function isAccept($variable)
    {
        return preg_match('/\.(jpe?g|png)$/i',$variable);
    }


?>