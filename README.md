#Order Comments Extension
The Order Comments extension for Magento 2 developed by Risecommerce allows customers to add a special comments/notes/message while placing the order on the checkout page which can be viewed both in admin backend and customer account.

##Support: 
version - 2.3.x, 2.4.x

##How to install Extension

Method I)

1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/OrderComments
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/OrderComments'

Method II)

Using Composer

composer require risecommerce/magento-2-order-comments-extension:1.0.1

#Enable Extension:
- php bin/magento module:enable Risecommerce_OrderComments
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

#Disable Extension:
- php bin/magento module:disable Risecommerce_OrderComments
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
