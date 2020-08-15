# Xvilo\Track\ApiServer\Api\TimersApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTimers**](TimersApiInterface.md#listTimers) | **GET** /timers | List all timers


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.timers:
        class: Acme\MyBundle\Api\TimersApi
        tags:
            - { name: "open_api_server.api", api: "timers" }
    # ...
```

## **listTimers**
> Xvilo\Track\ApiServer\Model\Timer listTimers($date)

List all timers

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TimersApiInterface.php

namespace Acme\MyBundle\Api;

use Xvilo\Track\ApiServer\Api\TimersApiInterface;

class TimersApi implements TimersApiInterface
{

    // ...

    /**
     * Implementation of TimersApiInterface#listTimers
     */
    public function listTimers(\DateTime $date)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| The Date for the timers to return |

### Return type

[**Xvilo\Track\ApiServer\Model\Timer**](../Model/Timer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

