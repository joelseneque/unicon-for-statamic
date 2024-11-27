![Unicon](https://github.com/user-attachments/assets/13ef809b-59c9-43b3-b823-15df6b14b2b1)


# Unicon for Statamic

[Unicon 🦄](https://unicon.rocks/) is a package for [Laravel](https://laravel.com/) that enables seamless, on-demand integration of over 200,000 icons from the Iconify API, with caching for optimized performance.

Huge thanks to [Nicolas Hedger](https://github.com/nhedger/) for creating the **Unicon** package.

## What does this addon do?
It allows you to install **Unicon** inside of your Statamic projects and adds a tag `unicon` that will enable you to use Unicon inside of Antlers files.

## How to Install

Just run the following command from your project root:

``` bash
composer require palmiak/unicon-for-statamic
```

You can optionally publish the configuration file by running:

```bash
php artisan vendor:publish --tag=unicon-config
```
Check the [configuration reference](https://unicon.rocks/config-reference) for more details.

## How to Use

### Antlers
Just use `{{ unicon name='heroicons:clock' }}` inside of any antlers file. 

If you want to add some classes, you can do it by using `{{ unicon name='heroicons:clock' class="some_class" }}`.

### Blade
Unicon provides blade support [out of the box](https://unicon.rocks/components/blade-component).
