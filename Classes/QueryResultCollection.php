<?php
namespace Dikastes\ExtbaseCollection;

use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;

class QueryResultCollection extends QueryResult
{
    protected $collection = null;

    public function getCollection() {
        return $this->collection;
    }

    public function __call ( string $method, array $arguments ) : mixed
    {
        return Common::callCollectionMethod($this, $method, $arguments);
    }
}
