# Xvilo\Track\ApiServer\Api\AdministrationApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTotalsForYearAndWeek**](AdministrationApiInterface.md#listTotalsForYearAndWeek) | **GET** /api/v1//totals/{year}/{week} | List all timers


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.administration:
        class: Acme\MyBundle\Api\AdministrationApi
        tags:
            - { name: "open_api_server.api", api: "administration" }
    # ...
```

## **listTotalsForYearAndWeek**
> Xvilo\Track\ApiServer\Model\WeekTotals listTotalsForYearAndWeek($year, $week)

List all timers

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AdministrationApiInterface.php

namespace Acme\MyBundle\Api;

use Xvilo\Track\ApiServer\Api\AdministrationApiInterface;

class AdministrationApi implements AdministrationApiInterface
{

    // ...

    /**
     * Implementation of AdministrationApiInterface#listTotalsForYearAndWeek
     */
    public function listTotalsForYearAndWeek(string $year, string $week)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **string**| The year for the totals to return |
 **week** | **string**| The week for the totals to return |

### Return type

[**Xvilo\Track\ApiServer\Model\WeekTotals**](../Model/WeekTotals.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

