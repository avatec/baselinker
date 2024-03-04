<?php

namespace BaselinkerClient\Order\DTO;

use BaselinkerClient\Lib\Base\BaseParameters;

class OrderDTO extends BaseParameters
{
    public int $order_status_id;
    public ?int $custom_source_id;
    public int $date_add;
    public string $currency;
    public string $payment_method;
    public bool $payment_method_cod;
    public bool $paid;
    public string $user_comments;
    public string $admin_comments;
    public string $email;
    public string $phone;
    public string $user_login;
    public string $delivery_method;
    public float $delivery_price;
    public string $delivery_fullname;
    public string $delivery_company;
    public string $delivery_address;
    public string $delivery_postcode;
    public string $delivery_city;
    public string $delivery_state;
    public string $delivery_country_code;
    public string $delivery_point_id;
    public string $delivery_point_name;
    public string $delivery_point_address;
    public string $delivery_point_postcode;
    public string $delivery_point_city;
    public string $invoice_fullname;
    public string $invoice_company;
    public string $invoice_nip;
    public string $invoice_address;
    public string $invoice_postcode;
    public string $invoice_city;
    public string $invoice_state;
    public string $invoice_country_code;
    public bool $want_invoice;
    public ?string $extra_field_1;
    public ?string $extra_field_2;
    /**
     * @var array $custom_extra_fields
     * {title: string, file: string}
     */
    public ?array $custom_extra_fields;
    /**
     * Order product array. Each element of the array is also an array containing fields:
     * storage (varchar) - type of magazine from which the product comes (available values: "db" - BaseLinker internal
     * catalog, "shop" - the online store magazine, "warehouse" - a connected wholesaler). storage_id (int) - the
     * identifier of the magazine from which the product comes (one of the shops connected to the account). Value "0"
     * for a product from the BaseLinker internal catalog. product_id (varchar) - Product identifier in BaseLinker or
     * store magazine. Blank if the product number is unknown variant_id (int) - Product variant ID. Blank if the
     * variant number is unknown name (varchar) - Product name sku (varchar) - Product sku ean (varchar) - Product ean
     * location (varchar) - Product location warehouse_id (int) - Product source warehouse identifier. Only applies to
     * products from BaseLinker inventory. By default warehouse_id is determined based on the source of the order.
     * attributes (varchar) - Specific product attributes (e.g. "Color: blue") price_brutto (float) - Single item gross
     * price tax_rate (float) - VAT tax rate e.g. "23", (value from range 0-100, EXCEPTION values: "-1" for "EXPT"/"ZW"
     * exempt from VAT, "-0.02" for "NP" annotation, "-0.03" for "OO" VAT reverse charge) quantity (int) - Quantity of
     * pieces weight (float) - Single item weight
     *
     * @var array $products
     */
    public array $products;

    public function __construct(
        int     $order_status_id,
        ?int    $custom_source_id,
        int     $date_add,
        string  $currency,
        string  $payment_method,
        bool    $payment_method_cod,
        bool    $paid,
        string  $user_comments,
        string  $admin_comments,
        string  $email,
        string  $phone,
        string  $user_login,
        string  $delivery_method,
        float   $delivery_price,
        string  $delivery_fullname,
        string  $delivery_company,
        string  $delivery_address,
        string  $delivery_postcode,
        string  $delivery_city,
        string  $delivery_state,
        string  $delivery_country_code,
        string  $delivery_point_id,
        string  $delivery_point_name,
        string  $delivery_point_address,
        string  $delivery_point_postcode,
        string  $delivery_point_city,
        string  $invoice_fullname,
        string  $invoice_company,
        string  $invoice_nip,
        string  $invoice_address,
        string  $invoice_postcode,
        string  $invoice_city,
        string  $invoice_state,
        string  $invoice_country_code,
        bool    $want_invoice,
        ?string $extra_field_1,
        ?string $extra_field_2,
        ?array  $custom_extra_fields,
        array   $products
    ) {
        $this->order_status_id = $order_status_id ?? null;
        $this->custom_source_id = $custom_source_id ?? null;
        $this->date_add = $date_add;
        $this->currency = $currency;
        $this->payment_method = $payment_method;
        $this->payment_method_cod = $payment_method_cod;
        $this->paid = $paid;
        $this->user_comments = $user_comments;
        $this->admin_comments = $admin_comments;
        $this->email = $email;
        $this->phone = $phone;
        $this->user_login = $user_login;
        $this->delivery_method = $delivery_method;
        $this->delivery_price = $delivery_price;
        $this->delivery_fullname = $delivery_fullname;
        $this->delivery_company = $delivery_company;
        $this->delivery_address = $delivery_address;
        $this->delivery_postcode = $delivery_postcode;
        $this->delivery_city = $delivery_city;
        $this->delivery_state = $delivery_state;
        $this->delivery_country_code = $delivery_country_code;
        $this->delivery_point_id = $delivery_point_id;
        $this->delivery_point_name = $delivery_point_name;
        $this->delivery_point_address = $delivery_point_address;
        $this->delivery_point_postcode = $delivery_point_postcode;
        $this->delivery_point_city = $delivery_point_city;
        $this->invoice_fullname = $invoice_fullname;
        $this->invoice_company = $invoice_company;
        $this->invoice_nip = $invoice_nip;
        $this->invoice_address = $invoice_address;
        $this->invoice_postcode = $invoice_postcode;
        $this->invoice_city = $invoice_city;
        $this->invoice_state = $invoice_state;
        $this->invoice_country_code = $invoice_country_code;
        $this->want_invoice = $want_invoice;
        $this->extra_field_1 = $extra_field_1;
        $this->extra_field_2 = $extra_field_2;
        $this->custom_extra_fields = $custom_extra_fields;
        $this->products = $products;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }

    public function getArray(): array
    {
        return [
            'order_status_id' => $this->order_status_id,
            'custom_source_id' => $this->custom_source_id,
            'date_add' => $this->date_add,
            'currency' => $this->currency,
            'payment_method' => $this->payment_method,
            'payment_method_cod' => $this->payment_method_cod,
            'paid' => $this->paid,
            'user_comments' => $this->user_comments,
            'admin_comments' => $this->admin_comments,
            'email' => $this->email,
            'phone' => $this->phone,
            'user_login' => $this->user_login,
            'delivery_method' => $this->delivery_method,
            'delivery_price' => $this->delivery_price,
            'delivery_fullname' => $this->delivery_fullname,
            'delivery_company' => $this->delivery_company,
            'delivery_address' => $this->delivery_address,
            'delivery_postcode' => $this->delivery_postcode,
            'delivery_city' => $this->delivery_city,
            'delivery_state' => $this->delivery_state,
            'delivery_country_code' => $this->delivery_country_code,
            'delivery_point_id' => $this->delivery_point_id,
            'delivery_point_name' => $this->delivery_point_name,
            'delivery_point_address' => $this->delivery_point_address,
            'delivery_point_postcode' => $this->delivery_point_postcode,
            'delivery_point_city' => $this->delivery_point_city,
            'invoice_fullname' => $this->invoice_fullname,
            'invoice_company' => $this->invoice_company,
            'invoice_nip' => $this->invoice_nip,
            'invoice_address' => $this->invoice_address,
            'invoice_postcode' => $this->invoice_postcode,
            'invoice_city' => $this->invoice_city,
            'invoice_state' => $this->invoice_state,
            'invoice_country_code' => $this->invoice_country_code,
            'want_invoice' => $this->want_invoice,
            'extra_field_1' => $this->extra_field_1,
            'extra_field_2' => $this->extra_field_2,
            'custom_extra_fields' => $this->custom_extra_fields,
            'products' => $this->products
        ];
    }
}
