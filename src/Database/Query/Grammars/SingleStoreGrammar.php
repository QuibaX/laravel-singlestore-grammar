<?php

namespace QuibaX\LaravelSinglestoreGrammar\Database\Query\Grammars;

use Illuminate\Database\Query\Grammars\MySqlGrammar;

class SingleStoreGrammar extends MySqlGrammar
{
    /**
     * Wrap the given JSON selector.
     *
     * @param  string  $value
     * @return string
     */
    protected function wrapJsonSelector($value)
    {
        [$field, $path] = $this->wrapJsonFieldAndPath($value);

        return 'json_extract_json('.$field.$path.')';
    }

    protected function compileJsonContains($column, $value)
    {
        [$field, $path] = $this->wrapJsonFieldAndPath($column);

        return 'JSON_ARRAY_CONTAINS_STRING('.$field.', '.$value.$path.')';
    }
}
