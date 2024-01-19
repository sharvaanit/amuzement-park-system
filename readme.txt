This is a readme file for #Amusement Park Management System

Amusement Park Management System is used to give information about the various rides and other facilities offered by the Amusement Park to the visitors. 
Its also used by the visitors to make bookings and to enter their details. It can also be used to store various staff details and retrieve it.
A database called Amusement_Park is linked to it in order to store, display, remove and update various details


## Front End

1. Open the home page in order to access the home site of the Amusement Park.
2. Open the land rides, water rides in order to get information about the rides offered.To get information about the transport and lodging facilities open the transport and lodging html page.
3. Open the htdocs folder present in the directory where xampp is downloaded.Open xampp and start Apache server and mysql.
4. Open localhost/ProjectFiles to access all the php files which can be used to store data in the database.
5. Open the amusement park visitor login.html file to login as a visitor and enter user as the username and Funzaville@123 as the password to proceed.
6. After login, you will be ridercted to the amusementvisitorform.html file and enter all the details to store them. Then enter your phone number details in the amusementparkvisitorphone.html page
7. When the details are entered by the visitor (after submit is clicked), the details are stored and the booking is made successfully.
8. If you are an admin and if you need to view the various details entered by the visitors first login using the stafflogin.html page. Enter Staff as username and Staff@123 as the password.
9. After the admin login is successful, it is directed to the displayvisitor.php file to view the details entered by various visitors like the visitor details, phone number, ticket details and visitor ride details.
10. After the visitor leaves the Amusement Park and if you want to delete the ticked details use the delete.php file and click on the delete button and youll view the change.

## Back End

1. First start the xampp control panel and start Apache server and mysql.
2. Click on the phpmyadmin and Create a database called amusement_park in mysql. The username is root and password is ''.
3. Create all the 9 tables using mysql syntax or using the provision provided by the xampp server itself.
4. Then click on the corresponding table name and you can find the insert, display, remove and update commands being implemented in the backend as well as the front end.
