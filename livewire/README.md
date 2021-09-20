
<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="">
    <img src="logo-full-000.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">React Admin Panel</h3>

  <p align="center">
     This will only be a Admin Panel w/ ReactJS 
    <br />
    <a href="https://www.virtualbusinesspartners.com.au/"><strong>Explore the docs »</strong></a>
    <br />
    <br />
  </p>




<!-- TABLE OF CONTENTS -->
<!-- 
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

-->

<!-- ABOUT THE PROJECT -->
## About The Project


<p>
This is the Web App Will consist both Client Admin and Master Admin access. This App is primarily a management tool for small to medium scale businesses' day-to-day process or Function Tapping Team members , managing tasks , client intimacy , File Management 
, Journey Tracking , Online Analytics tracking and invoicing.


Best of  Luck!
hbsin 
</p>

<!-- `github_username`, `repo_name`, `twitter_handle`, `email`, `project_title`, `project_description` -->


### Built With

### &nbsp; Back-end Stack
* []() Laravel 8 
* []() 
* []()  <br/>
### &nbsp; Design Framework
* []() Bootstrap
* []() Tailwind
* []() Laravel-Mix 
### &nbsp; DB
* []() Mysql

[comment]: <> (* []&#40;&#41; )



<!-- GETTING STARTED -->

### Prerequisites

you will need these apps to be able to contribute :
<br/>
&nbsp; <b>XAMPP  </b> &nbsp;  for PHP 8 and mysql
<br/>
&nbsp; <b>Node </b> or  IDE of your Preference
<br/>
&nbsp; <b>VSCode </b> or  IDE of your Preference
<br/>
&nbsp; <b>GitManagement App</b> or  gitBash Console
<br/>

## Getting Started

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system, and then clone this repository.

Next, navigate in your terminal to the directory you cloned this, and spin up the containers for the web server by running `docker-compose up -d --build site`.

After that completes, cd into `src/`  to get to project files.

[comment]: <> (* docker desktop -- for mysql image)
### Ports for this project
  ```sh
- **nginx** - :80, :8000, :8080, :8070,  :8001
- **mysql** - :3306
- **php** - :9000
- **redis** - :6379
- **mailhog** - :8025
   
  ```
Will Add in these images when and if we need to containerize our App.

## Usage
Three additional containers are included that handle Composer, NPM, and Artisan commands *without* having to have these platforms installed on your local computer. Use the following command examples from your project root, modifying them to fit your particular use case.

- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate`

## Persistent MySQL Storage

By default, whenever you bring down the Docker network, your MySQL data will be removed after the containers are destroyed. If you would like to have persistent data that remains after bringing containers down and back up, do the following:

1. Create a `mysql` folder in the project root, alongside the `nginx` and `src` folders.
2. Under the mysql service in your `docker-compose.yml` file, add the following lines:

```
volumes:
  - ./mysql:/var/lib/mysql
```

## Using BrowserSync with Laravel Mix

If you want to enable the hot-reloading that comes with Laravel Mix's BrowserSync option, you'll have to follow a few small steps. First, ensure that you're using the updated `docker-compose.yml` with the `:3000` and `:3001` ports open on the npm service. Then, add the following to the end of your Laravel project's `webpack.mix.js` file:

```javascript
.browserSync({
    proxy: 'nginx',
    open: false,
    port: 3000,
});
```

From your terminal window at the project root, run the following command to start watching for changes with the npm container and its mapped ports:

```bash
docker-compose run --rm --service-ports npm run watch
```

That should keep a small info pane open in your terminal (which you can exit with Ctrl + C). Visiting [localhost:3000](http://localhost:3000) in your browser should then load up your Laravel application with BrowserSync enabled and hot-reloading active.

## MailHog

The current version of Laravel (8 as of today) uses MailHog as the default application for testing email sending and general SMTP work during local development. Using the provided Docker Hub image, getting an instance set up and ready is simple and straight-forward. The service is included in the `docker-compose.yml` file, and spins up alongside the webserver and database services.

To see the dashboard and view any emails coming through the system, visit [localhost:8025](http://localhost:8025) after running `docker-compose up -d site`.

 LICENSE 
## License

Distributed under the MIT License. See `LICENSE` for more information.

-->

<!-- CONTACT -->
## Contact

Hans Bernard Sinugbuhan - [hans.sinugbuhan@virtualbusinesspartners.com](https://google.como) - Email

Project Link: 


 