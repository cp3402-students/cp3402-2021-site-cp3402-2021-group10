# Theme Deployment
The following `deployment.md` file provides a brief description of the development and deployment workflow used by contributors of the G10-Dynamic theme.

___


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

You can access your VVV Site via this [URL](https://vvv.test.com)

<br>

## Connecting G10-Dynamic GitHub Repository to Local Environment
Follow the steps below to add the  G10-Dynamic GitHub theme repository to your Local WordPress.
<br>

1. Navigate to your Local WordPress root directory. From there navigate to the themes folder `/wp-content/themes/`

2. In the themes folder, create a new folder and name it whatever you like

3. While in the folder right click and choose "Git Bash Here"

4. Git bash terminal will appear, then you can type in the following commands to pull the theme from our [Github repository](https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-group10)

```
git init

git add .

git remote add origin https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-group10.git

git checkout -b G10-Dynamic

git pull origin G10-Dynamic
```

<br>

>To Push Changes:
```
git add .

git commit -m "Your comment"

git push -u origin G10-Dynamic
```
<br>

## Connecting G10-Dynamic GitHub Repository to Server
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

<br>

>To Pull Changes:

```
cd public_html/wp-content/themes/G10-Dynamic

eval `ssh-agent` && ssh-add ~/.ssh/RSA_My_GitHub

git pull
```

<br>

>To Push Changes:

```
git add .

git commit -m "Your comment"

git push -u origin G10-Dynamic
```

For inquiries on the installation of G10-Dynamic, Please refer to `Installation.md`

<br>

## Version control
GitHub is used to collaborate and track changes to the theme code. To begin working on a new feature, make a branch. When the feature has been tested and is complete, merge that feature branch with the main branch.<br>


Branch Name | Description
------------|------------
**main** | This branch is used for production-ready code. Code on this branch is ready to be deployed to the World Wide Web.<br>
**G10-Dynamic** | This branch is used for theme development and is not stable.<br>
**Header** | This branch is used for Header development and is stable.<br>
**Footer** | This branch is used for Footer development and is stable.<br>

<br>

## Deployment & Web Hosting
Both websites have SSH connections enabled. Changes are deployed via Git through command lines.<br>


Web Address | Name
------------- | -------------
**Production/Live website** | [https://g10staging.com/](https://g10staging.com/)
**Staging website** | [https:/g10live.com/](https://g10live.com/)

<br>

## Project Management
Project management is done based on [Scrum and XP from the Trenches -2nd Edition](https://www.infoq.com/minibooks/scrum-xp-from-the-trenches-2/)

> [Trello board](https://trello.com/invite/b/sOGpE2zM/bf357bb64a6533dd8aebb13b321b3faf/content-managment-group-10) has been created to track the progress of the project stories, details of stories, scrum poker, task assignment, deadlines as well as any comments made by the team. 

> [Miro Board](https://miro.com/welcomeonboard/djRTTEhtUUFVdmVrN29TdGRzWUtCYUd2NDJDWmg5NTdSYng5QUt2V3ZDNjVqd1BJTDRKUjJqRmIycUlmcURLT3wzMDc0NDU3MzUzNjQwNjA1Mjk4?invite_link_id=662373346887) has also been created to record our daily standup meetings, weekly retrospective, as well as burndown/velocity charts.

>Project Management follows the following order:
```
1. Sprint Planning 
   - Plan on what to do the next sprint as well as moving stories into product backlog in Trello
   
2. Daily Stand-Up 
   - Team memebers to be update to date on what each member has done, been working on and if they are facing any problems
   
3. Theme is developed locally via VVV

4. Theme is updated to GitHub via Git

5. Updated Theme is pulled to Staging Server via SSH & Git

6. Theme is uploaded to Live Server

7. Trello Board is updated when the story is completed.

```
