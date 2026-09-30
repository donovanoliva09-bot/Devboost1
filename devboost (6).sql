-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2025 a las 15:37:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `devboost`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyectos` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `descripcion` varchar(3500) DEFAULT NULL,
  `lenguaje_programacion` varchar(50) DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  `Herramientas_utilizar` varchar(300) DEFAULT NULL,
  `instrucciones` varchar(4000) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyectos`, `name`, `descripcion`, `lenguaje_programacion`, `nivel`, `Herramientas_utilizar`, `instrucciones`, `img`) VALUES
(1, 'Basic calculator.', 'Create a console application that allows the user to perform basic mathematical operations: addition, subtraction, multiplication and division. The program should request 2 numbers from the user and show the result of the selected operation.', 'Python', 'Basic ', 'Code editor (Visual Studio Code, Sublime Text, or any other). Compiler (depending on the language chosen)', '1.Install Python on your computer.\r\n2.Create a new file called calculator.py in a text editor or IDE.\r\n3.Defines functions for addition, subtraction, division, handling division by zero.\r\nSave the File:\r\n4.Save the changes to calculator.py.\r\n5.Run the Application: Open the terminal or command line, Navigate to the directory where you saved the file.\r\nRun the program using the appropriate command for your system.\r\n7.Interact with the User: Follow the on-screen instructions to select an operation and enter the numbers.\r\n8.Test the Program: Perform different tests with various operations and numbers.\r\n9.Document the Code: Add comments in the code to explain the logic and facilitate understanding.', 'calculadora.jpg'),
(2, 'Name Generator', 'An application that generates random names from predefined lists of first and last names.', 'JavaScript', 'Basic ', 'HTML, CSS, JavaScript', '1.Create an HTML file with a button to generate a new name.\r\n2.Define arrays in JavaScript with first and last names.\r\n3.Write a function that selects a first and last name randomly.\r\n4.Show the generated name on the page every time the button is clicked.', 'nameGenerator.jpg'),
(3, 'Currency Converter', 'An application that converts an amount of money from one currency to another using fixed exchange rates.', 'JavaScript', 'Basic ', 'HTML, CSS, JavaScript', '1.Create an HTML form with fields to enter the amount and select currencies (for example, USD to EUR).\r\n2.Define fixed exchange rates in JavaScript.\r\n3.Calculate the converted value and display the result on the page.\r\n4.Add a button to perform the conversion', 'currencyConvert.jpg'),
(4, 'World Clock', 'A web application that displays the current time in different time zones around the world.', 'JavaScript', 'Basic ', 'HTML, CSS, JavaScript', 'Create an HTML file with a list of cities and an area to display the time.\r\nUse JavaScript to get the local time in each city using the Date function and the corresponding time zone.\r\nDisplay the time in a readable format (for example, HH:MM\r\n) for each city on the page.\r\nAdd a button to update hours in real time.', 'worldClock.jpg'),
(6, 'Notes Manager', 'Notes Manager is a web application that allows users to create, edit and delete notes. Users can organize their notes into categories, set priorities, and mark notes as important. This application will help programmers practice DOM manipulation, local storage usage, and data management.', 'JavaScript', 'Intermediate', '-Text editor: Visual Studio Code, Sublime Text, or any text editor.\r\n-Browser: Chrome, Firefox, or any modern browser.\r\n-Programming languages: HTML, CSS, JavaScript.\r\n-Storage: Local Storage.', '1.Set up the file structure: Create a folder for your project and the necessary files (index.html, style.css, script.js).\r\n2.Design the user interface in HTML: Create a form to add notes and a section to display the list of notes.\r\n3.Style the application with CSS: Add styles for the form and the notes list, ensuring an attractive and easy-to-use interface.\r\n4.Implement the logic in JavaScript: Define an array to store notes and create functions to add, edit, delete and mark notes as important.\r\n5.Use local storage: Implement the use of localStorage to save and retrieve notes. 6.When loading the app, check if there are notes stored and display them.\r\n7.Test the application: Open the file in your browser and verify that all functionalities work correctly.\r\n8.Document the project: Create a README.md file where you explain how to use the application and its structure.\r\n9.Deploy the application (optional): Consider sharing your project on platforms such as GitHub Pages or Netlify.', 'gestorNotas.png'),
(7, 'Weather API', 'A web application that displays the current weather for a city using a weather API (such as OpenWeatherMap).', 'JavaScript', 'Intermediate', 'HTML, CSS, JavaScript.', '1. Register with OpenWeatherMap to obtain an API key.\r\n2. Create an HTML form for users to enter the city name.\r\n3. Use JavaScript to make an API call to get the weather data.\r\n4. Display temperature, conditions and other relevant data on the page.', 'apiClima.png'),
(8, 'Image Gallery', 'A web application that allows users to upload images and view them in a gallery.', 'JavaScript', 'Intermediate', 'HTML, CSS, JavaScript, local storage (or a simple database)', '1. Create an HTML form to allow image uploads.\r\n2. Use JavaScript to handle loading and storing the images in local storage.\r\n3. Show images in a gallery on the page.\r\n4. Add functionality to delete images from gallery.', 'galeriaImagenes.png'),
(9, 'Guessing Game', 'An interactive game where the user has to guess a randomly generated number within a specific range.', 'JavaScript', 'Intermediate', 'HTML, CSS, JavaScript', '1. Create an HTML file with an input field for the number and a button to submit the response.\r\n2. Generate a random number in JavaScript within a defined range.\r\n3. Compare the user input with the generated number and give feedback (higher, lower, correct).\r\n4. Count the number of attempts and display it at the end of the game.', 'adivinanzas.jpg'),
(10, 'Library Management', 'Management system for a library that allows users to search, reserve and return books, as well as administrators to manage the book collection and user registration.', 'Python', 'Advanced', 'Python Tkinter (for the graphical interface) SQLite (for the database) Additional libraries: bcrypt (for encrypting passwords), requirements (if you decide to add inline features)', '1.Set up the environment: Install Python and verify that Tkinter and SQLite are available.\r\n2.Create the file structure: Organize a folder for the project and define the necessary files.\r\n3.Design the database: Create an SQLite database with tables for books and users.\r\n4.Implement functions: Develop functions to search, reserve, return books, and manage users.\r\n5.Design the graphical interface: Create the main window and forms using Tkinter.\r\n6.Connect the interface and the database: Integrate the interface logic with management functions.\r\n7.Implements application logic: Ensures that users can interact with the application.\r\n8.Add additional features (optional): Consider integrating external APIs to obtain additional information.\r\n9.Test the application: Verify that all functionalities work correctly.\r\n10.Document the project: Create a README.md that explains the use and structure of the application.', 'biblioteca.jpg'),
(11, 'Online Learning', 'A web application that allows users to register, take courses, and take tests to evaluate their knowledge.', 'JavaScript', 'Advanced', 'HTML, CSS, JavaScript, Node.js, MongoDB (or Firebase)', '1. Set up a development environment with Node.js and Express.\r\n2. Create a database in MongoDB to manage users and courses.\r\n3. Implement user authentication (registration and login).\r\n4. Develop an interface for users to access courses and materials.\r\n5. Add functionality to create and manage tests with feedback.', 'linea.jpg'),
(12, 'Minimalist Social Network', 'A web application that allows users to create profiles, post updates and follow other users.', 'JavaScript', 'Advanced', 'HTML, CSS, JavaScript, Node.js, MongoDB', '1. Set up a server with Node.js and Express.\r\n2. Create a database in MongoDB to manage profiles and posts.\r\n3. Implement user authentication and authorization.\r\n4. Create an interface to post updates and view other users\' feeds.\r\n5. Add functionality to follow and unfollow other users.', 'red.jpg'),
(13, 'Real Time Chat', 'A web application that allows users to chat in real time in different chat rooms.', 'JavaScript', 'Advanced', 'HTML, CSS, JavaScript, Node.js, Socket.io', '1. Set up a server with Node.js and Express.\r\n2. Install and configure Socket.io for real-time communication.\r\n3. Create an HTML interface for users to join chat rooms.\r\n4. Implement functions to send and receive messages in real time.\r\n5. Add options to create new rooms and list existing ones.', 'chat.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_creados`
--

CREATE TABLE `proyectos_creados` (
  `id_done` int(11) NOT NULL,
  `id_proyectos` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos_creados`
--

INSERT INTO `proyectos_creados` (`id_done`, `id_proyectos`, `id_usuario`) VALUES
(24, 1, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_favoritos`
--

CREATE TABLE `proyectos_favoritos` (
  `id` int(11) NOT NULL,
  `id_proyectos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos_favoritos`
--

INSERT INTO `proyectos_favoritos` (`id`, `id_proyectos`, `id_usuario`) VALUES
(68, 2, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `first_name` varchar(79) DEFAULT NULL,
  `last_name` varchar(79) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `first_name`, `last_name`, `correo`, `contraseña`, `img`) VALUES
(32, 'kevin', 'Hernandez', 'kevin@gmail.com', 'China2024', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyectos`);

--
-- Indices de la tabla `proyectos_creados`
--
ALTER TABLE `proyectos_creados`
  ADD PRIMARY KEY (`id_done`),
  ADD KEY `id_proyectos` (`id_proyectos`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `proyectos_favoritos`
--
ALTER TABLE `proyectos_favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proyectos` (`id_proyectos`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyectos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `proyectos_creados`
--
ALTER TABLE `proyectos_creados`
  MODIFY `id_done` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `proyectos_favoritos`
--
ALTER TABLE `proyectos_favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos_creados`
--
ALTER TABLE `proyectos_creados`
  ADD CONSTRAINT `proyectos_creados_ibfk_1` FOREIGN KEY (`id_proyectos`) REFERENCES `proyectos` (`id_proyectos`),
  ADD CONSTRAINT `proyectos_creados_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `proyectos_favoritos`
--
ALTER TABLE `proyectos_favoritos`
  ADD CONSTRAINT `proyectos_favoritos_ibfk_1` FOREIGN KEY (`id_proyectos`) REFERENCES `proyectos` (`id_proyectos`),
  ADD CONSTRAINT `proyectos_favoritos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
