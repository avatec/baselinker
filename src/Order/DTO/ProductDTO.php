<?php
namespace BaselinkerClient\Order\DTO;

class ProductDTO
{
    /**
     * @var string string
     * type of magazine from which the product comes (available values: "db" - BaseLinker internal catalog, "shop" -
     * the online store magazine, "warehouse" - a connected wholesaler).
     */
    private ?string $storage;
    /**
     * @var int int
     * the identifier of the magazine from which the product comes (one of the shops connected to the account).
     * Value "0" for a product from the BaseLinker internal catalog.
     */
    private int $storage_id;
    private ?string $product_id;
    private ?int $variant_id;
    private string $name;
    private string $sku;
    private string $ean;
    private string $location;
    private ?int $warehouse_id;
    private string $attributes;
    private float $price_brutto;
    /**
     * @var float $tax_rate
     * VAT tax rate e.g. "23", (value from range 0-100, EXCEPTION values: "-1" for "EXPT"/"ZW" exempt from VAT,
     * "-0.02" for "NP" annotation, "-0.03" for "OO" VAT reverse charge)
     */
    private float $tax_rate;
    private int $quantity;
    private float $weight;

    public function __construct(
        ?string $storage,
        int $storage_id,
        ?string $product_id,
        ?int $variant_id,
        string $name,
        string $sku,
        string $ean,
        string $location,
        ?int $warehouse_id,
        string $attributes,
        float $price_brutto,
        float $tax_rate,
        int $quantity,
        float $weight
    )
    {
        $this->storage = $storage ?? 'shop';
        $this->storage_id = $storage_id ?? 0;
        $this->product_id = $product_id;
        $this->variant_id = $variant_id;
        $this->name = $name;
        $this->sku = $sku;
        $this->ean = $ean;
        $this->location = $location;
        $this->warehouse_id = $warehouse_id;
        $this->attributes = $attributes;
        $this->price_brutto = $price_brutto;
        $this->tax_rate = $tax_rate;
        $this->quantity = $quantity;
        $this->weight = $weight;
    }

    public function __toString()
    {
        return json_encode($this->getArray(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );
    }

    public function getArray()
    {
        return [
            'storage' => $this->storage,
            'storage_id' => $this->storage_id,
            'product_id' => $this->product_id,
            'variant_id' => $this->variant_id,
            'name' => $this->name,
            'sku' => $this->sku,
            'ean' => $this->ean,
            'location' => $this->location,
            'warehouse_id' => $this->warehouse_id,
            'attributes' => $this->attributes,
            'price_brutto' => $this->price_brutto,
            'tax_rate' => $this->tax_rate,
            'quantity' => $this->quantity,
            'weight' => $this->weight
        ];
    }
}