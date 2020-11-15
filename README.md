# Product Review API

## Introduction
Product Review is a Laravel powered API that allows users to add, view, update and delete products. Users will also be able to rate and review a product.
## Application Features
* User can signup and signin
* User can add and view products
* User can update or delete his product
* User can add reviews for a product
* User can update or delete his review

## API Endpoints
Method | Route | Description
--- | --- | ---
`POST` | `/api/register` | Create a user
`POST` | `/api/login` | Login an already registered user
`GET` | `/api/products` | View all products
`GET` | `/api/products/:id` | View a single product
`POST` | `/api/products/:productId/reviews` | Create a review for a product
`PUT` | `/api/products/:productId/reviews/:reviewId` | Update a product review
`DELETE` | `/api/products/:productId/reviews/:reviewId` | Delete a product review

To see all the API Endpoints run below command in your terminal

```
php artisan route:list
```

## Setup
 
```
    $ git clone https://github.com/dinushchathurya/laravel-product-review-api.git
    $ cd laravel-product-review-api
    $ composer install
```
  - Duplicate and save .env.example as .env and fill in environment variables
    ```
    $ php artisan migrate
    ```
  ### Run The Service
  ```
  $ php artisan serve
  ```

## Author
[Dinush Chathurya](https://dinushchathurya.github.io/)

## License

Copyright (c) 2020 <a href="https://dinushchathurya.github.io/">Dinush Chathurya</a> and <a href="https://codingtricks.io/">codingtricks.io</a>

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Blog

https://codingtricks.io/

## 

<p ><h2 align="center">Happy<i class="fa fa-heart" style="color:red;"></i> Coding<i class="fa fa-code" style="color:orange;"> </i></h2></p>


