<?php
interface Logger
{
    public function log(string $msg): void;
}
interface Notifier
{
    public function notify(string $msg): void;
}
class UserService implements Logger, Notifier
{
    public function log($msg): void
    {
        echo "[LOG]: $msg<br/>";
    }

    public function notify($msg): void
    {
        echo "[NOTIFY]: $msg<br/>";
    }
}

$svc = new UserService();
$svc->log("Register successfully!!!");
$svc->notify("Welcome to my website!!!");
