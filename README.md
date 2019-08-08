# CGS - install/restore Theme custom templates

This repository includes copies of the latest X theme custom templates for Wordpress that are used by Senioranswers.org guidebook search page.

The search itself is built in Angular.
In order to be able to display a WP page that renders the NG app, we've created a custom X template based on their "Blank" templates.
Everytime a new version of the search app is released, these templates are updated to include references to the latest .js and .css dist files.
For the time being, this repository will be manually maintained to always include the latest version.

## Instructions - install the custom template files

In case the tehme is re-installed, there are 2 .php files that need to be uploaded, and one setting that needs to be verified from the WP admin. 

### Production

1. FTP /public_html/wp-content/themes/x

Upload `x/template-guidebook.php`

2. FTP  /public_html/wp-content/themes/x/framework/views/integrity

Upload `x/framework/views/integrity/template-guidebook.php`

3. Login to WP Admin

Open the Pages section

In: "Search"
Confirm that Template (right rail) is set to “Blank - Container | Header, Footer”


### Staging 

1. FTP /public_html/wp-content/themes/x

Upload `x/template-guidebook-staging.php`

2. FTP  /public_html/wp-content/themes/x/framework/views/integrity

Upload `x/framework/views/integritytemplate-guidebook-staging.php`

3. Login to WP Admin

Open the Pages section

In: "Colorado Senior Resource Guidebook (Staging)"
Confirm that Template (right rail) is set to “Blank - guidebook Staging”