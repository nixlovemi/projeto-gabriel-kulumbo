<?php

if (false === function_exists('redirect')) {
    // Simple page redirect
    function redirect($page)
    {
        header('location:' . URLROOT . $page);
    }
}
