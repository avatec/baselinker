<?php
namespace BaselinkerClient\Order;

use BaselinkerClient\Lib\Base\BaseResponse;
use BaselinkerClient\Order\Exceptions\CannotCreateOrderException;
use PharIo\Manifest\ElementCollectionException;

class OrderOutputResponse extends BaseResponse
{
    private string $status;
    private string $orderId;

    public function getResponse()
    {
        $this->status = $this->responseData['status'] ?? 'FAIL';
        $this->orderId = $this->responseData['order_id'] ?? null;

        $this->validateStatus();
    }

    private function validateStatus()
    {
        switch( $this->status ) {
            case 'SUCCESS':
                break;
            case 'ERROR':
                throw new CannotCreateOrderException();
            case 'FAIL':
                throw new FailResponseOnCreateOrderException();
        }
    }
}