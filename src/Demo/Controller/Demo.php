<?php
declare(strict_types=1);

namespace CasualMan\Demo\Controller;

use CasualMan\Common\Process\RpcServer;
use CasualMan\Demo\Service\DemoService;

class Demo {
    public function demo() : string {
        dump(RpcServer::getData());
        $res = DemoService::instance()->Demo();
        if($res->hasError()){
            dump("error {$res->getMessage()}|{$res->getCode()}");
        }
        dump($res->getData());
        return 'hello world!';
    }
}