define([
    'jquery',
    'mage/utils/wrapper',
    'Risecommerce_OrderComments/js/order/order-comments-assigner'
], function ($, wrapper, orderCommentsAssigner) {
    'use strict';

    return function (placeOrderAction) {

        /** Override default place order action and add comments to request */
        return wrapper.wrap(placeOrderAction, function (originalAction, paymentData, messageContainer) {
            orderCommentsAssigner(paymentData);

            return originalAction(paymentData, messageContainer);
        });
    };
});