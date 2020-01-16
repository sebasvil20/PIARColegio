# PIARColegio
Project

Piar is a school evaluation system where u can add new students, evaluate them and see graphics showing their performance in each statement evaluated

Is developed in Html5+Css3+Js+PHP7
Frameworks Bootstrap



Now I'm gonna explain some things:

-In the folder "mainApp" u gonna find:

  1.'sendData' Folder - It contains all the code used to send the data from the forms to the database
    a.Each file is name like this:   SD(SendData)+H*+NameOfTheSkillOrLearning+.php     
    *The H is because that file belongs to the habilities group, I didn´t write the 'H' in the learnings to identify it better*
    
  2.'cerrarSesion.php' - It closes the session
  
  3.'conexion.php' - It contains the conection to the database, this file is the most called in all project long
  4.'en
  
  5.'login.php' - It contains the php part of the login, as the login is with AJAX, the other part is in JS/main.js. The login is completelly secure vs SQLInjection
  
  6.'newStudent.php' - Create a new student into the database, is used in a form in 'Inicio.php'
  
  7.'newUser.php' - Basically the same thing above, but with the users that can login into the app
  
  8.'read.php' - Graphics and results, it shows you graphics bout the exams of the student that u've tested. I used the library: 'anychart.js', documentation: https://www.anychart.com/es/products/anychart/docs/
  
-In the folder "nombres" and "img" u gonna find all the graphic resources that I've used, the .svg,.png,.jpg,etc.

-In the folder "Js" u gonna find:

  1.The jquery library
  
  2.'loadingPage.js' - As the name says, is the script that controls the loading screen in 'Inicio.php' and 'index.php'
  
  3.'main.js' - Login, sending data with AJAX
  
 
-In the folder "Categorias" u gonna find all the evaluations that are posible to aplicate


If u have some questions or bugs report, contact me here: sebasvil20@gmail.com.

Glad to see u reading this, have a good day! :)
