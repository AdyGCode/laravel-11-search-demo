# Laravel 11 search demo

A small demo on creating a search box for laravel.

## About

The demonstration shows how to add a search to a list of users using the whereAny method
introduced with Laravel 10.47.

This demo using SQLite.

## References

- Redmond, P. (2024). Query Builder whereAll() and whereAny() Methods Added to Laravel
  10.47. [online] Laravel News. Available
  at: https://laravel-news.com/laravel-10-47-0 [Accessed 22 May 2024].
- Ramadhani, I. (2023). Search in Laravel. [online] Medium. Available
  at: https://medium.com/@iqbal.ramadhani55/search-in-laravel-e0e20f329b01 [Accessed 22 May 2024].

## Setting Up

Clone this repository:

```shell
git clone https://github.com/AdyGCode/laravel-11-search-demo.git
```

Change into the folder:

```shell
cd laravel-11-search-demo
```

Install the requirements for the project:

```shell
composer install
npm i && npm upgrade
```

Copy the `.env-sqlite` file renaming it `.env`
```shell
cp .env-sqlite .env
```

If needed change the `APP_URL=http://laravel-11-search-demo.test` in the `.env` to 
`APP_URL=http://localhost`.


