<?php

function clean_data($input)
{
    return trim(htmlspecialchars($input));
}