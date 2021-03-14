<?php

namespace Booni3\Linnworks\Api;

class ProcessedOrders extends ApiClient
{
    public function searchProcessedOrders(array $request) {
        return $this->post('ProcessedOrders/SearchProcessedOrders',[
            'request' => json_encode($request),
        ]);
    }

    public function getOrderInfo(string $pkOrderId) {
        return $this->post('ProcessedOrders/GetOrderInfo',[
            'pkOrderId' => $pkOrderId,
        ]);
    }
}