# Laravel 5.3 Application with Vue.js

Posts describing how the application is built, in sequential order.

- [Generate Authentication for a Laravel 5.3 Web Application](https://medium.com/@connorleech/generate-authentication-for-a-laravel-5-3-web-app-384781a5529f#.lt3wnh1tr)

- [Build Google Maps Typeahead Functionality with Vue.js and Laravel 5.3](https://medium.com/@connorleech/build-google-maps-typeahead-functionality-with-vue-js-and-laravel-5-3-b75986c77df1#.vna8lby33)

- [Create a database Model and Controller in Laravel 5.3](https://medium.com/@connorleech/create-a-database-model-and-controller-in-laravel-5-3-b3e15218f6ae#.f3xtwxt4y)

- [Create and Edit records + Form Reuse in Laravel 5.3](https://medium.com/@connorleech/create-and-edit-records-form-reuse-in-laravel-5-3-f70a4b1d5f9b#.7xl7t81ei)

## Other Resources

- Vue.js animations and transitions: https://snipcart.com/blog/vuejs-transitions-animations

- Building a custom Google Maps component with Vue 2: https://medium.com/founders-factory/building-a-custom-google-map-component-with-vue-js-d1c01ddd0b0a 

- Intant AJAX search with Laravel and Vue.js: https://pineco.de/instant-ajax-search-laravel-vue/ 

- Vue.js Zip Code Finder - https://vuejsfeed.com/blog/vue-js-zip-code-finder

- Bootstrap table - http://bootstrap-table.wenzhixin.net.cn/getting-started/

- Vue-strap - https://yuche.github.io/vue-strap/

## Install project

```
composer install
npm install
npm run watch
php artisan serve
```

If you get an error about "The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths." then run:

```
php artisan config:clear    
php artisan key:generate
php artisan config:cache
```