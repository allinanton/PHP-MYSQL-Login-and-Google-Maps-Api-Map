# Project Report PAI - Personal Website and Web Application Development

## Introduction
The Project for Internet Application Programming (PAI) involved the development of a personal website and an interactive web application. The website was designed to provide detailed information about academic projects, while the web application integrated functionalities such as authentication and interactive display of visited locations on a map.

## Project Structure
The project's structure comprises HTML and PHP pages, styled using CSS files, and enhanced with JavaScript functionality.

- `index.html` (CV): This page serves as a central hub, offering a detailed presentation of academic projects and facilitating interactive navigation within the CV.
- `login.php`: This page facilitates user authentication through PHP sessions, featuring a simple and intuitive interface. Upon successful authentication, users are redirected to the main page (`index.php`), while in case of failure, explanatory messages are provided.
- `logout.php`: Manages the logout process, redirecting users to the login page. It ensures session closure for maintaining security.
- `map.php`: This page presents an interactive Google map, highlighting locations visited by the user based on the database. Geographic coordinates are extracted from a MySQL database.
- `register.php`: This page allows users to register by completing a form, contributing to the expansion of the database.
- `reglog.php`: Centralizes the authentication and registration processes, providing an intuitive interface and appropriate redirection.
- `index.php`: The page after authentication serves as a central access point, offering buttons for quick access to the map or CV.

## Technical Implementation
The technical implementation of the project relied on the use of PHP sessions for managing authentication state and the creation of two MySQL tables (`users` and `points`) for storing necessary data for functionalities. User data and map points are efficiently managed through interaction with the database.

![Login page (non-logged)](https://github.com/allinanton/PHP-MYSQL-Login-and-Google-Maps-Api-Map/assets/61775219/eb51877b-aaa5-4f75-86e5-279b63090c14)

![Front page (after successful login)](https://github.com/allinanton/PHP-MYSQL-Login-and-Google-Maps-Api-Map/assets/61775219/eea9fac6-81b4-4902-8e13-c700acbc1c36)

![CV page (after interacting with the CV button)](https://github.com/allinanton/PHP-MYSQL-Login-and-Google-Maps-Api-Map/assets/61775219/75956895-7150-4e7b-9f51-60a868acb26c)

![Map page (after interacting with the map button)](https://github.com/allinanton/PHP-MYSQL-Login-and-Google-Maps-Api-Map/assets/61775219/739d0d00-569e-42b9-9428-2dd36a6da563)
