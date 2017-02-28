<?php
/**
 * Created by PhpStorm.
 * User: yaoxiang
 * Date: 2017/2/27
 * Time: 21:20
 */
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\WebChat;

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new WebChat()
        )
    ),8080
);

$server->run();