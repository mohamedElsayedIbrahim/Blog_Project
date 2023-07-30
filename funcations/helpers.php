<?php

function clean_data($input)
{
    return trim(htmlspecialchars($input));
}

function isEmpty($input)
{
    return empty($input) == true ? true: false;
}

function isMin($input,$min)
{
    return strlen($input) < $min ? true:false;
}

function validEmail($input)
{
    return filter_var($input,FILTER_VALIDATE_EMAIL) == false ? true : false;
}

function validate_file_size($file_size)
{
    if (($file_size)/(1024*1024) > 1) {
        return  false;
    }
    return true;
}