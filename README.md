# Alphonse Theme Template
The idea for this repository is we have a base theme template for Wordpress than you can use it when do you want.

## Requirements

* PHP installed in your local (7+ version);
* Node 10.16.
* Optional: Valet server.

## Installation
This project works inside of the Wordpress directory, you can download [here](https://es-mx.wordpress.org/download/). Once you have Wordpress runing local, copy this project inside `wp-content/themes/theme-name/`. After that active the theme from the Wordpress admin.

When the Alphonse Theme Template is active, follow the nexts steps:

1. `cd wp-content/theme/theme-name`.
2. Run `yarn` to install whole dependencies.

## Configure your server

For hot re-load, Alphonse Theme uses `browser-sync` with Webpack. If you use Valet just must will change the next part in `webpack.config.js`

```js
new BrowserSyncPlugin({
  files: '**/*.php',
  proxy: 'http://name-of-your-valet-directory.test'
});
```

If you use other tool to run the project, just must will change that part for the server proxy.

## Run project
* Development mode: `yarn dev`.
* Production mode: `yarn build`.
