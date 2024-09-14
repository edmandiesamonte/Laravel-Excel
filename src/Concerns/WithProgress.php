<?php

namespace Maatwebsite\Excel\Concerns;

interface WithProgress
{
    public function progressStart(int $totalRows);

    public function progressAdvance(int $step = 1);

    public function progressFinish();
}