<?php
namespace BaselinkerClient\Order;

use BaselinkerClient\Client;

class OrderStatusService extends Client
{
    private $client;

    public const STATUS_NEW_ORDER = 266019;
    public const STATUS_READY_TO_SEND = 266020;
    public const STATUS_SENDED = 266021;
    public const STATUS_CANCEL = 266022;

    public function __construct()
    {
        parent::__construct();
    }

    public function getOrderStatusList()
    {
        return $this->client->doRequest([], 'getOrderStatusList');
    }
}