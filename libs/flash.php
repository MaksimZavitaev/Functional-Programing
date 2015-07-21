<?php

namespace Flash;

function init()
{
    if (!isset($_SESSION['flash']['msg'])) {
        $_SESSION['flash']['msg'] = array();
    }
}

function addMessage($text, $status = false)
{
    $msg = array('text' => $text, 'status' => $status);
    array_push($_SESSION['flash']['msg'], $msg);
}

function clearMessages()
{
    unset($_SESSION['flash']['msg']);
}

function getMessages()
{
    $out = $_SESSION['flash']['msg'];
    clearMessages();
    return $out;
}

function hasMessages()
{
    return !empty($_SESSION['flash']['msg']);
}