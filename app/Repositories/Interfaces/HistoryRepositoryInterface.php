<?php

namespace App\Repositories\Interfaces;


interface HistoryRepositoryInterface
{
    public function getLatestHistories($params);

    public function getHistoryByDate($params);
}