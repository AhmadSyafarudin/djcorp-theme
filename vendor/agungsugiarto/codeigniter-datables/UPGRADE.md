## Upgrading from v6.x to v7.x
  - composer require yajra/laravel-datatables-oracle 
  - composer require yajra/laravel-datatables-buttons
  - php artisan vendor:publish --tag=datatables --force
  - php artisan vendor:publish --tag=datatables-buttons --force

## Upgrading from v5.x to v6.x
  - Change all occurrences of `Fluent\DataTables` to `Fluent\DataTables`. (Use Sublime's find and replace all for faster update). 
  - Remove `Datatables` facade registration.
  - Temporarily comment out `Fluent\DataTables\DatatablesServiceProvider`.
  - Update package version on your composer.json and use `yajra/laravel-datatables-oracle: ~6.0`
  - Uncomment the provider `Fluent\DataTables\DatatablesServiceProvider`. 
