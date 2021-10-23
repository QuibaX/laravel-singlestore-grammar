<?php

namespace QuibaX\LaravelSinglestoreGrammar\Database;

use Illuminate\Database\MySqlConnection;
use QuibaX\LaravelSinglestoreGrammar\Database\Query\Grammars\SingleStoreGrammar;

class SingleStoreConnection extends MySqlConnection
{
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new SingleStoreGrammar);
    }
}
