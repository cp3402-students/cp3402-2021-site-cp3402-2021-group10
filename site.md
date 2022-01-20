# Maintaining the site
All of our sites use the G10-Dynamic WordPress theme. The majority of our content can be changed directly on the Admin Panel.
___

<br>

## Required plugins
The following plugins must be installed for the website to function as expected.

Plugin Name | Plugin Description | Plugin Link
--------|--------|--------
**Advanced Custom Fields** | Content editing made easy. Use the Advanced Custom Fields plugin to take full control of your WordPress edit screens & custom field data. | [https://www.advancedcustomfields.com/](https://www.advancedcustomfields.com/)
**Advanced Custom Fields Pro** | ACF PRO includes extra fields & features to better develop websites including PHP Blocks, Repeatable Fields, Page Building tools, Media Galleries and Custom Options Pages. | [https://www.advancedcustomfields.com/pro/](https://www.advancedcustomfields.com/pro/)
<br>

## Changing Logo & Site Title
1. In the WordPress admin panel select **Appearance > Customize > Site Identity** from the left navigation sidebar.
2. Click **Select logo** and upload the logo you wish to use for the website, Title can be changed as well.
3. Click **Publish** to save and publish your changes.
<br>


## Modification of Web Content
1. In the WordPress admin panel select **Pages > Your Page of Choosing > Edit**.
2. **All of the page content (SlideShows, Video, Pictures, Sections, Words, Etc)** are there, you can freely replace, change, add or make any modifcation as you like.
3. Click **publish** to save and publish your changes.
<br>

## Updating Site Via Git/GitHub
Ensure you have a SSH connect to the website. 

Command | Sample Code
-------------|----------------
**Establish SSH Connect to Server** | `ssh Username@hosting.com`
**Change Directory to Desired Folder** | `cd public_html/wp-content/themes/G10-Dynamic`
**Elevate Privilege** | `eval `ssh-agent` && ssh-add ~/.ssh/RSAKey`
**Pull Update** | `git pull`
<br>


## Web Hosting
Both websites have SSH connection enabled.<br>
Web Address | Name
------------- | -------------
**Production/Live website** | [https://g10staging.com/](https://g10staging.com/)
**Staging website** | [https:/g10live.com/](https://g10live.com/)
