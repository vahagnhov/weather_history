<?php

namespace App\Repositories;


use App\Models\History;
use App\Repositories\Interfaces\HistoryRepositoryInterface;
use Carbon\Carbon;

class HistoryRepository implements HistoryRepositoryInterface
{
    public function getLatestHistories($params)
    {
        $lastHistories = History::where('date_at', '>', Carbon::now()->subDays($params['lastDays']))->orderby('date_at', 'desc')->limit(30)->get();
        return $lastHistories;
    }

    public function getHistoryByDate($params)
    {
        $history = History::where('date_at', $params['date'])->first();
        return $history;
    }
}