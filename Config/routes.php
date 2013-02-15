<?php
/* Paypal IPN plugin */
Router::connect('/PaypalIpn/process', array('plugin' => 'PaypalIpn', 'controller' => 'InstantPaymentNotifications', 'action' => 'process'));
/* Optional Route, but nice for administration */
Router::connect('/PaypalIpn/:action/*', array('admin' => 'true', 'plugin' => 'PaypalIpn', 'controller' => 'InstantPaymentNotifications', 'action' => 'index'));
/* End Paypal IPN plugin */
