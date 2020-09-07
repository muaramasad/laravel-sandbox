<?php

namespace App\Order;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;
use Faker\Factory as Faker;

class OrderDetails
{
    /**
     * @var BankPaymentGateway
     */
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $faker = Faker::create('id_ID');
        $this->paymentGateway->setDiscount(500);

        return [
            'name' => $faker->name,
            'address' => $faker->address
        ];
    }
}
