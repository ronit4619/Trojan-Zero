# ![trojanZERO Logo](img/logo.png)
####_The hero your city needs and deserves._

## Installation

Use the free, open-source web server package [XAMPP](https://www.apachefriends.org/index.html) to deploy the website locally.
Place the website's source code folder into `(Location of xampp folder)\htdocs`

It is also possible to deploy the website publicly using a web host - be aware that some functionality may change, as the source code was intended for deploying locally.

## Usage
To test an administrator's experience within the website, use the following account credentials when logging in.
>**Email:** admin@trojanzero.com

>**Password:** 1234567 

To test a guard's experience within the website, use the following account credentials when logging in.
>**Email:** demetrius@troy.com

>**Password:** qwerty

Explore the website with this specific flow for the best user experience:
```
> index.php
> login.php OR register.php (depending on chosen role experience)
> panel\
> panel\cameras.php
> panel\users.php
> panel\analytics.php
> panel\account.php
```

## Inspiration
In technology, a trojan virus is a type of malware that hides itself in what appears to be a normal file. The term was coined after the story of the hollow wooden horse, which was used by the sneaky Greek soldiers to trick the defenders of Troy into accepting a “gift”. Inspired by this infamous defeat of the City of Troy at the hands of the Greeks, trojanZERO was created with the intent to become a security measure that would prevent enemies from infiltrating a city.

## Overview
With the usage of thermal technology, trojanZERO uses thermal cameras to detect heat signatures within wagons and other large constructs that pass through the city borders. In the case of a triggered warning detection, the city officials and guards that are added to the administration panel will receive alerts, allowing them to have a chance at taking the necessary actions to save their city. 

In addition, trojanZERO provides users with various features to streamline and protect the integrity of a city’s physical security network. With the ability to grant and revoke access to the thermal cameras, city officials are able to keep track of who can view the camera at all times. Advanced analytics, which include prediction-based detections and statistical models, are also provided to the administrators to assist with decision-making processes.

## Frameworks & Languages
The clean UI was designed using the Bootstrap framework, along with its language dependencies of HTML, CSS and sCSS. All backend development was done using Javascript, jQuery and PHP. To store users and any data, Google’s Firebase authentication and database modules were integrated. Rendering all analytics into a beautiful, readable format was done using the Chart.js API. The minimalist administration panel is used to access and connect every other feature together, which includes thermal security cameras, user information and analytics. Accessibility, smooth UI, and ease of access were all kept in mind when creating the website. Customers will be able to easily purchase and use the product.

