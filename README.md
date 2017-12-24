# Dataway API class for PHP #
Example class in PHP to connect our API to your application.

## Documentation ##
If you wish to learn more about our API, please visit our [control panel](https://portal.dataway.nl/). Documentation for the API is available in both Dutch and English.

## Requirements ##
To use the Dataway API example class, the following things are required:
+ You are a IT reseller or wholesale service provider.
+ Get yourself a free [partner account](https://www.dataway.nl/partners). No sign up costs.
+ PHP >= 5.3
+ PHP cURL extension

## Example: How to get an list with available phone numbers? ##
```php
$api = new DatawayAPI();
$api->auth('test@user.com', '098f6bcd4621d373cade4e832627b4f6');

$stockArray = $api->request('voice/stock', array('country' => 'NLD', 'area' => 'Rotterdam'));

print_r($stockArray);

if($api->errors())
{
  echo 'Error to recieve data from the API.';
  exit();
}
```

## Want to help us make our API class even better? ##
Want to help us make our API client even better? We take [pull requests](https://github.com/dataway-nl/dataway-api-php/pulls), sure. But how would you like to contribute to a technology oriented organization? Dataway is hiring developers and system engineers. [Check out our vacancies](https://www.dataway.nl/vacatures) or [get in touch](mailto:jobs@dataway.nl).

## License ##
[BSD (Berkeley Software Distribution) License](https://opensource.org/licenses/bsd-license.php).
Copyright (c) 2015-2017, Dataway B.V.

## Support ##
Contact: [www.dataway.nl](https://www.dataway.nl/) - support@dataway.nl - +31 85 666 00 51
