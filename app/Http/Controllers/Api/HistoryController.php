<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\HistoryRepositoryInterface;

class HistoryController extends Controller
{
    private $historyRepository;

    public function __construct(HistoryRepositoryInterface $historyRepository)
    {
        $this->historyRepository = $historyRepository;
    }

    /**
     * Get last 30 history.
     *
     * @param  array $params
     * @return \Illuminate\Http\Response
     */
    public function weatherGetHistory(array $params)
    {
        $lastHistories = $this->historyRepository->getLatestHistories($params);
        return $lastHistories;
    }

    /**
     * Get history by date.
     *
     * @param  array $params
     * @return \Illuminate\Http\Response
     */
    public function weatherGetByDate(array $params)
    {
        $history = $this->historyRepository->getHistoryByDate($params);
        return $history;
    }
}
