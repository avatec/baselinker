<?php
namespace BaselinkerClient\Order;

use BaselinkerClient\Order\DTO\OrderDTO;
use BaselinkerClient\Client;

class OrderService
{
    private array $categoryCollection;
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getOrders(?array $params = [])
    {
        return $this->client->doRequest($params, 'getOrders');
    }

    public function addOrder(OrderDTO $orderDTO)
    {
        return $this->client->doRequest($orderDTO->getArray(), 'addOrder');
    }

    public function addCategory(string $name, int $category_id, int $parent_id = 0)
    {
        $dto = new CategoryDTO(1, $category_id, $name, $parent_id );
        $this->categoryCollection[] = $dto->getArray();
    }

    public function send()
    {
        if(empty( $this->categoryCollection )) {
            throw new CannotSendCategoryEmptyCollection();
        }

        foreach( $this->categoryCollection as $category )
        {
            $response = $this->client->doRequest($category, 'addCategory');
            print_r($response);
        }
    }
    public function getOrderStatusList()
    {
        return $this->client->doRequest([], 'getOrderStatusList');
    }
}