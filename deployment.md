# Theme Deployment
The following `deployment.md` file provides a brief description of the development and deployment workflow used by contributors of the G10-Dynamic theme.

___

<br>

## Required Softwares
The following software is required for the theme development and deployment workflow.
- [VVV](https://varyingvagrantvagrants.org/)
- [Gith](https://git-scm.com/)
- [Vagrant](https://www.vagrantup.com/)
- [Virtual Box](https://www.virtualbox.org/)

<br>

## Local Development Environment Setup
### Prerequisites
Follow the steps below to set up your local development environment on your Windows, Mac, or Linux operating system.
<br>

* [VirtualBox](https://www.virtualbox.org/)

* [Vagrant](https://www.vagrantup.com/docs/installation)

* [VVV](https://varyingvagrantvagrants.org/docs/en-US/installation/)

<br>

You can access your your VVV Site via this [URL](https://vvv.test.com)

<br>

### Connecting G10-Dynamic GitHub Repository to Local Enviorment
Follow the steps below to add the  G10-Dynamic GitHub theme repository to your Local WordPress.
<br>

1. Navigate to your Local WordPress root directory, from there navigate to the themes folder `/wp-content/themes/`

2. In the themes folder, create a new folder and name it whatever you like

3. While in the folder right click and choose "Git Bash Gere"

4. Git bash terminal will appear, then you can type in the following commands to pull the theme from our [Github repository](https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-group10)

```
git init

git add .

git remote add origin https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-group10.git

git checkout -b G10-Dynamic

git pull origin G10-Dynamic
```
To push changes:

```
git add .

git commit -m "Your comment"

git push -u origin G10-Dynamic
```

### Connecting G10-Dynamic GitHub Repository to Server
Follow the steps below to connect the G10-Dynamic GitHub theme repository to a server.
<br>

1. [Setup SSH Key on GitHub](https://docs.github.com/en/enterprise-server@3.0/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account)

2. Enable and Setup SSH connection on your server [BlueHost Setup Process](https://www.bluehost.com/help/article/ssh-access) / [DreamHost Setup Process](https://help.dreamhost.com/hc/en-us/articles/216041267-SSH-overview)

3. Open Git terminal

4. Connect to your server via SSH and Clone
```
ssh username@server_domain.com

git remote add origin git@github.com:cp3402-students/cp3402-2021-site-cp3402-2021-group10.git
```
5. To pull

```
cd public_html/wp-content/themes/G10-Dynamic

eval `ssh-agent` && ssh-add ~/.ssh/RSA_My_GitHub

git pull
```
Or to push

```
cd public_html/wp-content/themes/G10-Dynamic

eval `ssh-agent` && ssh-add ~/.ssh/RSA_My_GitHub

git pull
```

To push changes:

```
git add .

git commit -m "Your comment"

git push -u origin G10-Dynamic
```

For Quiries on the installation of G10-Dynamic Please refer to Installation.MD

<br>

## Project management
A [Trello board](https://trello.com/invite/b/sOGpE2zM/bf357bb64a6533dd8aebb13b321b3faf/content-managment-group-10) has been created to track the progress of several project actions. Use this Trello board to post details, actions and ideas. Move the cards around and assign them to contributors as needed.<br>
<br>

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

