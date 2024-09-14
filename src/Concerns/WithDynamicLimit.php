<?php

namespace Maatwebsite\Excel\Concerns;

interface WithDynamicLimit
{
    public function hasReachedLimit($row): bool;
}