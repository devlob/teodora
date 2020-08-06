<?php

use App\Bootstrap\App;
use Devlob\Database\Connection;
use Devlob\Database\Goku\Builder\QueryBuilder;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = require 'config/database.php';

App::bind('Database', new QueryBuilder((new Connection())->make($config['Database'])));