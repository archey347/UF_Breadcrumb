# UF_Breadcrumb
Breadcrumb service provider for Userfrosting 4.

## Install
Edit UserFrosting `app/sprinkles.json` file and add the following to the `require` list : `"lcharette/uf_breadcrumb": "^2.0.0"`. Also add `Breadcrumb` to the `base` list. For example:

```
{
    "require": {
        "lcharette/uf_breadcrumb": "^2.0.0"
    },
    "base": [
        "core",
        "account",
        "admin",
        "Breadcrumb"
    ]
}
```

Run `composer update` then `php bakery bake` to install the sprinkle.

## Usage

In your controllers, you can dynamically add breadcrumbs to the UI. Simply use the `addItem` function of the `breadcrumb` service. 

```
$this->ci->breadcrumb->add("Item name", "path/");
```

Note that the item name can also be a translation key. Path can also be optional if you don't want to provide a link with your breadcrumb.

Note that the site index is automatically added to the list. 

See file `templates/navigation/breadcrumb.html.twig` for breadcrumbs styling.  

The default UserFrosting layouts and themes will pick up the breadcrumbs automatically. If your UF theme doesn't include breadcrumbs automatically, simply add this line to your twig files:
```
{% include 'navigation/breadcrumb.html.twig' with {page_title: block('page_title')} %}
```
