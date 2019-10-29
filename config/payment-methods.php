<?php 
return [ 

    'enabled' => [ 
        'Mercadopago', 
    ], 

    'use_sandbox' => env ('SANDBOX_GATEWAYS', true), 

    'Mercadopago' => [ 
        'logo'=>'/img/payment/Mercadopago.png', 
        'display'=>'MercadoPago', 
        'client'=> env ('MP_CLIENT'), 
        'secret'=> env ('MP_SECRET'), 
    ], 

];