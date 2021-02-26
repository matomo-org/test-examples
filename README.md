# Matomo Test Examples

This is a collection of various tests pages that let you test and reproduce various features of Matomo.

## Installation

This can be hosted either on the same domain as Matomo or on a different domain.

To install it, simply clone this repository using git.

## Configuration

Make a copy of `config/config.example.php` and save it as `config/config.local.php`. Adjust any variable as needed.

Variables:

* `matomoUrl` - The URL to the Matomo installation. A trailing slash will be removed automatically
* `matomoIdSite` - The ID of the site data should be tracked into or data should be requested from

## File Structure

* tracking/*.php - all tracking related test files are put into this directory. Ideally, features are grouped together when possible like `tracking/events/*.php` and `tracking/content/*.php`.
* `consent/*.php` - includes consent and opt out related examples

## Adding a new page

* Simply create a new PHP page in the best suited directory (feel free to create a directory if it doesn't exist yet)
* Put `<?php include '../bootstrap.php'; ?>` in the beginning to load the config
* You can then use variables like this: `<?php echo $matomoUrl ?>`
* If any possible it be great to start with a leading `<h1>` element giving the page a title and a `<p>` element describing what you can test on this page, what you expect to happen when doing something or loading the pag etc.

## Viewing a page

Either open the index page of this directory in the browser or directly load a specific filename in the browser.