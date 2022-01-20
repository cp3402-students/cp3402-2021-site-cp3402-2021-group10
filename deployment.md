# Theme Deployment
The following `deployment.md` file provides a brief description of the development and deployment workflow used by contributors of the Jazzy theme.

___

<br>

## Required software
The following software is required for the theme development and deployment workflow.
- [VVV](https://varyingvagrantvagrants.org/)
- [Gith](https://git-scm.com/)
- [Vagrant](https://www.vagrantup.com/)
- [Virtual Box](https://www.virtualbox.org/)

## Local development environment setup
### Installing Local (WordPress development tool)
Follow the steps below to set up your local development environment on your Windows, Mac, or Linux operating system.
<br>
'''
1.First up is to download and install VirtualBox which is the virtual machine.<br>
2.Next download and install Vagrant.<br>
3.Go to [VVV getting started page](https://varyingvagrantvagrants.org/docs/en-US/installation/) and follow the instructions to install VVV of your operating system.<br>
4. Installation will take around 30minutesand you can access your [VVV site](https://vvv.test.com) after a green teddy bear appears at the end of installation.<br>
'''

<br>

### Adding G10 GitHub repository to local WordPress installation
Follow the steps below to add the G10 GitHub theme repository to your WordPress theme folder.<br>
1. Open your file explorer and navigate to your Local WordPress root directory. From there navigate to the themes folder `/wp-content/themes/`.<br>
2.In the themes folder, create a new folder and name it whatever you like.<br>
3. Go inside the folder and then right click and choose git bash here<br>
4. Git bash terminal will appear and then you can type in the following commands to pull the theme from our [Github repository](https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-group10).<br>
git init<br>
git add .<br>
git remote add origin https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-group10.git<br>
git checkout -b G10-Dynamic<br>
git pull origin G10-Dynamic<br><br>
4. Open your WordPress admin panel and navigate to **Appearance > Themes**.
5. Select the G10-Dynamic theme<br>
6. After selecting the theme, verify that it is working properly by viewing the WordPress websites home page.<br>

## Project management
A [Trello board](https://trello.com/invite/b/sOGpE2zM/bf357bb64a6533dd8aebb13b321b3faf/content-managment-group-10) has been created to track the progress of several project actions. Use this Trello board to post details, actions and ideas. Move the cards around and assign them to contributors as needed.<br>

## Version control
GitHub is used to collaborate and track changes to the theme code. To begin working on a new feature, make a branch based on the staging branch. When the feature is complete merge that feature branch with the staging branch for testing. If testing passes, merge the staging branch with the main branch.<br>


Branch Name | Description
------------|------------
**main** | This branch is used for production-ready code. Code on this branch is ready to be deployed to the World Wide Web.<br>
**staging** | This branch is used for theme development and is not stable.<br>

## Deployment & Web Hosting
Two websites that automatically track the commit history (when a change is pushed to main or staging, the website will automatically update) for the main and staging branches have been deployed on Amazon Web Services. Both of the websites are deployed on the same EC2 instance with the use of Apache Virtual Hosts. Refer to [site.md](site.md) for automatic deployment setup.<br>

Web Address | Name
------------- | -------------
**Production website** | [https://production.callumdennien.com](https://production.callumdennien.com)
**Staging website** | [https://staging.callumdennien.com](https://staging.callumdennien.com)

