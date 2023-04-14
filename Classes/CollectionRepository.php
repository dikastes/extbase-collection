<?php
namespace Dikastes\ExtbaseCollection;

use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use TYPO3\CMS\Extbase\Persitence\Repository;
use Dikastes\ExtbaseCollection\ExtbaseCollection;

abstract class CollectionRepository extends Repository
{
    public function __call( string $method, array $arguments ) : mixed {
        $result = parent::$method($arguments);

        if ( $result instanceof QueryResult ) {
            $castedResult = new QueryResultCollection();
            foreach (get_object_vars($this) as $key => $value) {
                $obj->$key = $value;
            }
            return $castedResult;
        }

        return $result;
    }
}
