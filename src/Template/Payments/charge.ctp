<?php
$this->layout='navfoot';
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
require_once("../vendor/autoload.php");

\Stripe\Stripe::setApiKey("sk_test_nYtuehOEi2354zX1rbzvj2Om");

// Token is created using Stripe.js or Checkout!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

// Charge the user's card:

try{
    $charge = \Stripe\Charge::create(array(


        "amount" => "1000",
        "currency" => "aud",
        "description" => "Example charge",
        "source" => $token,
    ));
} catch(\Stripe\Error\Card $e){
// The card has been declined
}


?>