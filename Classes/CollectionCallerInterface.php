<?php
namespace Dikastes\ExtbaseCollection;

use Illuminate\Support\Collection;

interface CollectionCallerInterface
{
    public function getCollection () : Collection;
}
