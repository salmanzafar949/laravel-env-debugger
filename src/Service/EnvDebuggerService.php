<?php

namespace Salman\EnvDebugger\Service;

class EnvDebuggerService
{
    private static $app;
    private static $log;
    private static $db;
    private static $broadcast;
    private static $cache;
    private static $queue;
    private static $session;
    private static $redis;
    private static $mail;
    private static $aws;
    private static $pusher;
    private static $s3;
    private static $others;

    private static function GetAllConfigVariables()
    {
        self::$app = config('envdebugger.app');
        self::$log = config('envdebugger.log');
        self::$db = config('envdebugger.db');
        self::$broadcast = config('envdebugger.broadcast');
        self::$cache = config('envdebugger.cache');
        self::$queue = config('envdebugger.queue');
        self::$session = config('envdebugger.session');
        self::$redis = config('envdebugger.redis');
        self::$mail = config('envdebugger.mail');
        self::$aws = config('envdebugger.aws');
        self::$pusher = config('envdebugger.pusher');
        self::$s3 = config('envdebugger.s3');
        self::$others = config('envdebugger.others');
    }

    public static function GetAppEnv()
    {
        return self::$app;
    }

    public function Clean()
    {

    }
}
