<?php
namespace BaselinkerClient\Category\DTO;

class CategoryDTO
{
    private string $storage_id;
    private int $category_id;
    private string $name;
    private int $parent_id;

    public function __construct(string $storage_id, int $category_id, string $name, int $parent_id = 0)
    {
        $this->storage_id = $storage_id;
        $this->category_id = $category_id;
        $this->name = $name;
        $this->parent_id = $parent_id;
    }

    public function __toString()
    {
        return json_encode($this->getArray(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    public function getArray()
    {
        return [
            'storage_id' => $this->storage_id,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'parent_id' => $this->parent_id
        ];
    }
}