# Candela Citation

A plugin that extends creative commons attribution functionality to Candela/Pressbooks

## Synopsis

[Pressbooks](https://github.com/pressbooks/pressbooks) is a plugin that turns
your Wordpress multisite installation into a book publishing platform. Candela
Citation adds meta data to individual book pages for indicating attribution and
licensing type to the content created using the Pressbooks platform.

## Installation

### Composer

1. From the root wordpress installation, add the following to `composer.json` (replacing `v0.2.2` with desired version):

    ```
    {
      "repositories": [
        {
          "type": "vcs",
            "url": "https://github.com/lumenlearning/candela-citation"
        }
      ],
      "require": {
        "lumenlearning/candela-citation": "v0.2.2"
      }
    }
    ```

1. Run `composer install` in the terminal

### Manually

1. Download or clone Candela Citation into your wordpress multisite plugins directory: `/path/to/wordpress/wp-content/plugins`
1. Log in to your Wordpress multisite instance and navigate to `Network Admin > Plugins` and activate the Candela Citation plugin

*Note: Wordpress Multisite, Candela Utility and Pressbooks are required in order for Candela Citation to work correctly*

## License

MIT - See LICENSE for more information
