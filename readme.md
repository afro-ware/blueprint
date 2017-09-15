# API Blueprint Generator
[![Build Status](https://travis-ci.org/afroware/blueprint.svg?branch=master)](https://travis-ci.org/afroware/blueprint)
[![License](https://img.shields.io/packagist/l/afroware/blueprint.svg?style=flat-square)](https://packagist.org/packages/afroware/blueprint)
![Development Version](https://img.shields.io/packagist/vpre/afroware/blueprint.svg?style=flat-square)
![Monthly Installs](https://img.shields.io/packagist/dm/afroware/blueprint.svg?style=flat-square)
[![StyleCI](https://styleci.io/repos/37761089/shield)](https://styleci.io/repos/37761089)

This package generates a valid API Blueprint 1A document from a collection of classes.

## Usage

Some index method phpdoc example:

```
<?php

/**
 * Products
 *
 * @Resource("Products", uri="/products")
*/
class ProductsController extends ApiController
{
    /**
     * Products list
     *
     * Get current products list
     * 
     * @Get("/")
     * @Versions({"v1"})
     * @Transaction({
     *      @Request(identifier="/?state=synced"),
     *      @Response(200, body={"data":{{"id":"rkoVJ7qa4Z6lzXdVnldgx9LmpBP0DQ3e","name":"Product name","status":"active"}},"meta":{"pagination":{"total":1,"count":1,"per_page":1,"current_page":1,"total_pages":1,"links":{}}}})
     * })
     * @Parameters({
     *      @Parameter("api_token", type="string", required=true, description="API Token", default=null),
     *      @Parameter("page", type="integer", required=false, description="Pagination page", default=1),
     *      @Parameter("state", type="string", required=false, description="Product status filter", default="synced", members={
     *          @Member(value="synced", description="Products synced"),
     *          @Member(value="pending", description="Products pending")
     *      })
     * })
     */
    public function index(Request $request)
    {}
}
```

## License

This package is licensed under the [BSD 3-Clause license](http://opensource.org/licenses/BSD-3-Clause).
