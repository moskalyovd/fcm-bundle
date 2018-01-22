# MoskalyovdFCMBundle #
Symfony bundle for [Firebase Cloud Messaging](https://firebase.google.com/docs/cloud-messaging/)
  
# Installation #
  To use this bundle in your project add following lines to your `composer.json`:

  ``` json
    "require": {
        "moskalyovd/php_firebase_bundle": "^0.2"
    }

  ```
  
  and enable it in your `AppKernel.php`:

  ``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
            new Moskalyovd\FCMBundle\JelvixFCMBundle(),
    );
}
  
  ```

# Configuration #

``` yaml
moskalyovd_fcm:
    server_key: 'your_server_key'

```

# Usage #

  ``` php

  <?php
  public function testAction()
  {
        $client = $this->get('moskalyovd_fcm.client');

        $message = new Message();
        $message->addRecipient(new Device('token'));
        $message->setNotification(new Notification('Title', 'Body'));

        $response = $client->send($message);
  }
  ```
  
> For more information please reffer to[php-fcm](https://github.com/Paragraph1/php-fcm)  library
