To setup Covidcensus you need to have downloaded th following 
	-XAMPP
	-Any broswer of your choice
	-visual studio code and extensions (html, php, jquery, javascript,css) (for futher developement)
	-covid sensus project zip
	
	--To download xampp here's a link : https://www.apachefriends.org/download.html
	--To download visual studio code here's a link : https://code.visualstudio.com/download
	--Unzip the covidcensus.zip and transfer the covidsesnsus.sql file to a new location of your choice eg desktop
	
After downloading and installing the above you now move on to setting it up
	-After installing xampp for linux users:
							-first you open your file explorer and click on other locations
							-then you click on computer
							-then you click on opt
							-next you click on lampp
							-next you click on htdocs
							-now once your in htdocs you need to copy and paste the covidcensus file in htdocs but since 
							 since your in user mode you dont have access so in other to transfer it you right click and 
							 open htdocs in the terminal and type 'pwd' and hit enter after which you copy the path you 							 obtain.
							-Next you go the folder where the extracted covidsensus project is for example downloads
							 you right click and open downloads in the terminal and type the following commnd 
							 'sudo cp -r foldername/filename address_of_destination_directory' i.e                     								 'sudo cp -r covidcensus /opt/lampp/htdocs' and after you hit enter once that's complete 
							 you close htdocs.
							-Next you open up the covidcensus.sql file in the desktop and then you open it up 
							-Next you open the terminal and type the following command to start xampp 								 'sudo /opt/lampp/lampp start' and hit enter after which you move to your defualt browser
							 and type 'localhost' and hit enter you will greeted with a welcome to Xampp page then you 								 click phpMyadmin and you click on the tab called 'sql'.
							-You then return to the opened covidcensus.sql file and copy its contents and come and paste 
							 in the opened sql editor in your browser after pasting it you then click the 'Go' button 
							 to create the database for the project.
							-Once this is done you then open a new tab in your browser and you type 								 'localhost/covidcensus/' and the website has been setup on your linux system.
	-After installing xampp for windows users:
							-you open up local disk c or your windows partition and locate your xampp folder  then you
							 copy the covidcensus project folder and place in the xampp folder.
							-next you open the covidcensus.sql file.
							-Then you click on start and startup apache and mysql.
							-you then type in your default browser 'localhost' and hit enter you will greeted with a 								 welcome to Xampp page then you click phpMyadmin and you click on the tab called 'sql'.
							-You then return to the opened covidcensus.sql file and copy its contents and come and paste 
							 in the opened sql editor in your browser after pasting it you then click the 'Go' button 
							 to create the database for the project.
							-Once this is done you then open a new tab in your browser and you type 								 'localhost/covidcensus/' and the website has been setup on your linux system.

For developers after installing xampp and setting up your visual code or editor of preference you then follow the instruction above and setup the website based on the system you use for development. Finally you open the project file in your editor and begin your developement.

Please respect the website and used it only for the desisgned purposed and that is to inform the population covid 19.
																	unix io:::ed


	
