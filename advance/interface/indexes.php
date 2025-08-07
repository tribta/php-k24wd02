<?php
interface Logger
{
    public function log($msg);
}
interface Notifier
{
    public function notify($msg);
}
class UserService implements Logger, Notifier
{
    public function log($msg)
    {
        echo "[LOG]: $msg<br/>";
    }

    public function notify($msg)
    {
        echo "[NOTIFY]: $msg<br/>";
    }
}

$svc = new UserService();
$svc->log("Register successfully!!!");
$svc->notify("Welcome to my website!!!"); 
