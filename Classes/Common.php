<?php
namespace Dikastes\ExtbaseCollection;

use Illuminate\Support\Collection;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Common
{
    public static function callCollectionMethod ( CollectionCallerInterface $caller, string $method, array $arguments ) : mixed
    {
        if ( !method_exists( Collection::class, $method ) )
            throw new \BadMethodCallException();
        if ( !$caller->getCollection() )
            $caller->collection = new Collection( $caller->toArray() );
        return $caller->collection->$method($arguments);
    }
}
