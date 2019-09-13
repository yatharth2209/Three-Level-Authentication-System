# Three-Level-Authentication-System

The project is an authentication system that validates user for accessing the system only when they have input correct password. The project involves three levels of user authentication. There are varieties of password systems available, many of which have failed due to bot attacks while few have sustained it but to a limit. In short, almost all the passwords available today can be broken to a limit. Hence this project is aimed to achieve the highest security in authenticating users.

It contains three logins having three different kinds of password system. The password difficulty increases with each level. Users have to input correct password for successful login. Users would be given privilege to set passwords according to their wish. The project comprises of text password i.e. pass phrase, image based segmentation password and graphical password for the three levels respectively. This way there would be negligible chances of bot or anyone to crack passwords even if they have cracked the first level or second level, it would be impossible to crack the third one. Hence while creating the technology the emphasis was put on the use of innovative and nontraditional methods. Many users find the most widespread text-based password systems unfriendly, so in the case of three level password we tried creating a simple user interface and providing users with the best possible comfort in solving password.

Level 1: 

Level 1 of this 3 level authentication system consists of a simple login/register page where a user can either register into the system by giving his/her details ( Name , Id and Password), or login by username and password.

Level 2:

This stage consists of a Graphical password where a user has to choose a particular pattern as a password. The chosen password will be saved in database and the next time user tries to login, the system will demand the same pattern and then will match it from the one saved in database.

Level 3:

The third and the final stage of this 3 level authentication system consists of a Picture Password where an image will be randomly generated and will be divided into equal segments  of 9*9. The segments will be numbered and the user has to select a particular order of segments as a password. This particular level of authentication is not subjected to any attack and safety is ensured to the user.

After all these levels, in order to ensure the authentication of the user, a 4-digit OTP (One Time Password) will be sent to the mail Id provided by the user. The user will have to enter the OTP in the required column and if the OTP matches, the user will be able to login successfully otherwise an error message will be generated.
