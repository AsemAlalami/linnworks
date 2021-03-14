<?php

namespace Booni3\Linnworks\Api;

class Inventory extends ApiClient
{
    public function getCountryCodes() {
        return $this->get('Inventory/GetCountryCodes');
    }
}