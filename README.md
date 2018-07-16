# TechDivision/PayoneMockable

This module provides some plugins in order to manipulate API endpoints within the `payone-gmbh/magento2` (https://github.com/PAYONE-GmbH/magento-2) 
module. This is necessary for mocking purpose in a local development environment or for additional testing systems, which are
not supported by PAYONE. 

> **ATTENTION:**
> Please do not use this module in production environment. It is designed for testing purpose only!

## Getting Started

### Configuration

After installing the module you need to configure the endpoints for your PSP mock service by adding following values
into your `env.php`.

```php
    'system' => [
        'default' => [
            'techdivision_payone_mockable' => [
                'payone' => [
                    'client_api' => 'https://psp-mock.test/payone/client-api/',
                    'post_gateway' => 'https://psp-mock.test/payone/post-gateway/',
                ]
            ]
        ],
    ],
```

### Mock Service

This module was designed for https://github.com/techdivision/psp-mock, but it should also work for others.

## License

This project is licensed under the OSL 3.0 License.
