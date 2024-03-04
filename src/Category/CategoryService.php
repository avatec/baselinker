<?php
namespace BaselinkerClient\Category;

use BaselinkerClient\Category\DTO\CategoryDTO;
use BaselinkerClient\Client;

class CategoryService
{
    private array $categoryCollection;
    private Client $client;

    public function __construct( $client )
    {
        $this->client = $client;
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
}