# Shared components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/liberty-technologies/components.svg?style=flat-square)](https://packagist.org/packages/liberty-technologies/components)
[![Total Downloads](https://img.shields.io/packagist/dt/liberty-technologies/components.svg?style=flat-square)](https://packagist.org/packages/liberty-technologies/components)

Shared Laravel View Components for Liberty Technologies

## Requirements

- Laravel 12 or 13
- Tailwind CSS 4
- Alpine.js, for the interactive components (delete button, collapse button, header, sidebar)

## Installation

You can install the package via composer:

```bash
composer require liberty-technologies/components
```

[Heroicons](https://heroicons.com) are installed with the package, so the built-in icons work out of the box.

Add the components directory as a source in your `resources/css/app.css`, and define the `primary`, `info`, `success` and `danger` color scales (50 to 950) the components use:

```css
@import "tailwindcss";

@source "../../vendor/liberty-technologies/components/resources/views/**/*.blade.php";

@theme {
    --color-primary-50: oklch(0.967 0.016 12.89);
    /* ... through --color-primary-950, and the same for info, success and danger */
}
```

To use your own SVG icons in the sidebar items, publish the configuration for Blade Icons, uncomment the **default** icon set, and create the `resources/svg` directory

```bash
php artisan vendor:publish --tag=blade-icons
```

The footer displays `config('app.owner')`, so add an `owner` key to your `config/app.php`.

To use the favicon component, you must publish the assets

```bash
php artisan vendor:publish --tag=lt-components-assets
```

We recommend adding this command to your update script to keep the favicons up to date.

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag=lt-components-views
```

## Usage

### Buttons

#### Delete

Displays a delete button and asks for confirmation when clicked

![Alt text](/resources/images/buttons/delete.png?raw=true "Delete Button")
![Alt text](/resources/images/buttons/delete-confirm.png?raw=true "Delete Button Confirmation")

**Variables**

- `object` for it will check the `delete` policy.
- `route` the given route to redirect after confirmation

```php
<x-lt-components::buttons.delete :object="$splitter" :route="route('splitters.destroy', $splitter)" />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nessim Abadi](https://github.com/nessimabadi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## TODO

Add to Readme

### Buttons

- [x] Delete
- [ ] Collapse
- [ ] Primary
- [ ] Submit

### Card

- [ ] Card

### Description List

- [ ] List
- [ ] Item

### Header

- [ ] Header
- [ ] Dropdown
- [ ] Dropdown Item

### Inputs

- [ ] Text
- [ ] Label
- [ ] Error

### Links

- [ ] Create
- [ ] Edit
- [ ] Info
- [ ] Internal
- [ ] External
- [ ] Text
- [ ] View

### Sidebar

- [ ] Sidebar
- [ ] Title
- [ ] Item

### Table

- [ ] Table
- [ ] Table Row
- [ ] Table Cell Header
- [ ] Table Cell

### Misc

- [ ] Errors
- [ ] Footer
- [ ] Spinner
- [ ] Widget
- [ ] Favicons
