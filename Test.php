<?php

ini_set('error_reporting', E_ALL);
ini_set("display_errors", "1");

use Magento\Framework\App\Bootstrap;
require '/var/www/html/magento2/app/bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();
$state = $objectManager->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');
$context = $objectManager->get('Magento\Framework\App\Helper\Context');

/*$paymentHelper = $objectManager->create('Directa24\Payments\Helper\PaymentHelper');

$payload = [
    'invoice_id' => rand(10,100),
    'amount' => 100,
    'country' => 'BR',
    'currency' => 'BRL',
    "payment_method" => "IX",
    "payer" => [
        "id" => "11",
        "document" => "84932568207",
        "first_name" => "Ricardo",
        "last_name" => "Carlos",
        "phone" => "+23385266942",
        "email" => "juanCarlos@hotmail.com",
        "address" => [
            "street" => "Calle 13",
            "city" => "bahia",
            "state" => "SP",
            "zip_code" => "12345-678"
        ]
    ],
    "description" => "test description",
    "client_ip" => "123.123.123.123",
    'back_url' => "https://www.directa24.com/deposit_cancelled",
    'success_url' => "https://www.directa24.com/deposit_completed",
    'error_url' => "https://www.directa24.com/deposit_error",
    "notification_url" => "https://www.directa24.com/directa24/notify",
    "logo" => "https://www.directa24.com/directa24.png",
    "test" => true,
    'language' => 'en',
    "mobile" => false
];

$order = $paymentHelper->getOrder(252);

$orderData = [
    'order' => $order,
    'language' => 'en',
    'payment_method' => 'BE',
    'description'=> "test description",
    'back_url' => "https://www.directa24.com/deposit_cancelled",
    'success_url' => "https://www.directa24.com/deposit_completed",
    'error_url' => "https://www.directa24.com/deposit_error",
    'notification_url' => "https://www.directa24.com/directa24/notify",
    'logo' => "https://www.directa24.com/directa24.png",
    'test' => true,
    ];

print "<pre>";

$Newpayload = $paymentHelper->getDepositPayload($orderData);
print_r($Newpayload);
print_r($payload);

echo "<br/>";
echo "<br/>";
$p1 = $paymentHelper->createCheckoutDeposit($Newpayload);
print_r($p1);
print_r($p1);
echo "<br/>";
if($p1->redirect_url)
{
    echo "<h1>" . $paymentHelper->getResponse()->user_id . "</h1> <br/>";
    echo "<a href='" . $p1->redirect_url . "'target='_blank'>Click Here</a>";
    //echo "<script type='text/javascript'>window.open('". $p1->redirect_url ."', '_blank');</script>";
}*/

echo "Hello";
