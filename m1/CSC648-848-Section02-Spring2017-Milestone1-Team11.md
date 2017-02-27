| Name | Phase 1 | Phase 2 | FINAL  | Print & Review |
| ------ | ------ | ------ | ------ | ------ |
| HIN | Completed  |
| JORDAN | Completed |
| DARYL | Completed  | 
| ANDRE | In progress | 
| ANTHONY | In progress  |
| HASAN | Completed | 


- HIN SUNDAY MORNING - EDIT EXECUTIVE SUMMARY - CHECK WHOLE FILE
- DARYL SUNDAY EVENING - EDIT EXECUTIVE SUMMARY - CHECK WHOLE FILE
- ANDNRE MONDAY MORNING - EDIT EXECUTIVE SUMMARY - CHECK WHOLE FILE
- HASAN MONDAY EVENING - EDIT EXECUTIVE SUMMARY - CHECK WHOLE FILE

#EXTRA INFORMATION FOR MARKDOWN VISIT DILLINGER.IO


## JORDAN
**Team11** solves scaled networking for college students reselling textbooks. Our team unified the core functions of e-commerce platforms into a single, complete architecture. Team11 has launched its Alpha program at **San Francisco State University**.
 **Team11** is built on top of one cutting edge software to provide high speed transactions for users. Our platform will be reliable, secure and customer tested when we go to market. 
 	We believe that existing peer to peer textbook sales platforms do not meet the needs for users and investors. In our platform, schools can work directly to update textbooks requirements for classes at their university using http://sfsuse.com/~sp17g11/_login.
 	A scaled review process for textbook postings in the case of fraud is in place.
 
 **To the seller:** no markup will be placed on your book for using our system. 
 **To the buyer:** reach out to the seller using our secure platform. 
 **To the school:** any book unavailable on our platform can be linked to the campus library/store at a small fee. Signing up for premium membership will qualify you in priority ad spacing.
 	
 	You can learn about our core software engineers at http://sfsuse.com/~sp17g11/about.php
 
 Our team has compiled extensive research and practice implementing the latest design and features into web systems. 
 


## DARYL

1. Jeremy is a student at SFSU with very limited technological skills who is logging on the website for the first time looking to buy a textbook. When first opening the webpage Jeremy is able to see a button prompting him to browse listing which he selects. After that Jeremy is able to choose the “textbooks” category from a list of options and all the current items marked as textbooks appear initially sorted alphabetically. Jeremy doesn’t want to spend a lot of money so above the listings he sees where it says “sort” and selects “price low to high” and the results are organized by pice. Without logging in Jeremy is able to access the descriptions and pictures of items. When he presses the button to begin the transaction he is prompted to either log in to his account or register a new one. As an unregistered user with no prior account Jeremy must enter an .edu email along with a password to create his account, as well as agree to our terms and services agreement that addresses all of the permissions the user grants to the site. Jeremy enters an email which does not contain the .edu suffix and upon pressing register is prompted to enter a .edu email. After the account has been created Jeremy will be redirected to the product page he was previously viewing, where he may use the messaging system to contact the seller where they can discuss price, meeting times, or deliver options. The records of their messages will be saved for administrator mediation purposes, using the transaction number as a primary key, as stated in the terms and services agreement.

2. Sally is a skilled administrator of the site who has opened the site to mediate an issue between two customers. After opening the web page Sally clicks the log in button and enters her username and password. The database acknowledges her as an administrator and opens her site with administrator controls. In order to mediate between the two parties Sally uses the transaction number to find the details of the transaction. From there as an administrator she can find the chat logs between the two users to find the root and solution of the information. From there she is able to determine by reading through the chat logs that the seller was being misleading about the quality of the product. Leaving the product page Sally is able to find the seller by using his user id number and block his account from making sales.

3. Alexander is a student at SFSU who has previously used the website, for purchasing and now wants to post his own calculator for sale. Upon opening the site he presses the post button and is prompted to log in or register for an account as a previously registered user Alexander inputs his email and password and is logged in. Alexander enters the name of his product, selects a category and is forced to upload at least one image of his product and is able to add up to five total images. After he presses the post button on this page the information he entered into the page is added to the product page where his calculator can be found under the calculator category for purchase. When a registered user wishes to communicate with Alexander about his post he will receive a notification on the messages tab that can be found from a link on the main page. 

## HASAN
***Guest User***  shall be able to:
- browse in website freely.

***Verified User*** shall be able to:
-  post new ***Items*** for sale and edit their own ***Items***.
-  communicate with other ***Verified Users*** about their ***Item*** for sale.
-  report any privacy violation to site ***Admin***.

***Admin*** shall be able to:
- edit, delete, block users' account.
- monitor and filter unusual activities.
- detect posting violations and enforce preventive precautions.

***Item*** shall be: 
- books or class notes.
- service related to education.
- electronic gadgets.
- accessories or clothing.
- furniture. 
- mobility / commuting device. 

## ANTHONY 
Initial list of functional specs – see class notes. This refers to high level functions you plan to develop to the best of your knowledge at this point.  Focus on WHAT and not HOW. Keep the user in mind. Develop these functions to be consistent with use cases and requirements above. Number each requirement and use these numbers consistently from then on. For each function use 1-5 line description

1.  Users shall be able to...

	a.)create an account
	
	b.)browse listings without having to register
	
	c.)sort listings by categories
	
	d.)post listings
	
	e.)contact sellers
	
	f.)leave reviews (?)
	
	g.)contact support

	h.)upload up to 5 images of their product
 	
 	i.)login/logut of accounts
	
2. Admins shall be able to...

	a.)remove listings
	
	b.)block accounts
 	
 	c.)view message logs

 	d.)login/logout
	
3. The application shall be able to...

	a.)provide registration with sfsu email and a user-generated password
 	
 	b.)sort listings by category
 	
 	c.)sort similarly categorized products by price, alphabetically, or by date
 	
 	c.)provide messaging services between sellers and buyers
 	
 	d.)provide a terms of agreement
 	
 	e.)log conversations between users
 	
 	f.)differentiate between users and admins
 	
 	g.)show images of products

 	h.)notify users of new messages

## HIN
1.	Application shall be developed using class provided LAMP stack
2.	Application shall be developed using pre-approved set of SW development and collaborative tools provided in the class. Any other tools or frameworks must  be be explicitly approved by Anthony Souza on a case by case basis.
3.	Application shall be hosted and deployed on Amazon Web Services as specified in the class
4.	Application shall be optimized for standard desktop/laptop browsers, and must render correctly on the two latest versions of all major browsers: Mozilla, Safari, Chrome. 
5.	Application shall have responsive UI code so it can be adequately rendered on mobile devices but no mobile native app is to be developed
6.	Data shall be stored in the MySQL database on the class server in the team's account
7.	Application shall be served from the team's account
8.	No more than 50 concurrent users shall be accessing the application at any time
9.	Privacy of users shall be protected and all privacy policies will be appropriately communicated to the users.
10.	The language used shall be English. 
11.	Application shall be very easy to use and intuitive. No prior training shall be required to use the website. 
12.	Google analytics shall be added
13.	Messaging between users shall be done only by class approved methods to avoid issues of security with e-mail services.
14.	Pay functionality (how to pay for goods and services) shall not be implemented.
15.	Site security: basic best  practices shall be applied (as covered in the class)
16.	Modern SE processes and practices shall be used as specified in the class, including collaborative and continuous SW development
17.	The website shall prominently display the following text on all pages "SFSU Software Engineering Project, Spring 2017.  For Demonstration Only". (Important so as to not confuse this with a real application).
18. Application shall provide user with adequate information on its functionality.
19. Application shall not crash, and if it does, not constantly. 
20. Application, in the event of a crash, shall be back up within 24 hours.
21. Application shall be available during all hours except in the following cases: the website is taken down after the semester, the website has crashed, contract with webserver was expired, web server access right was violated by third parties, or there is a serious problem/bug that needs immediate addressing. 
22. Application shall load all pages fast enough to satisfy the average user.
23. Application shall not confuse the user with unnecessary information.
24. Application shall provide users with all information necessary to acquire their product. 
25. All user username and password shall be adequately protected.
26. User account and information shall not be compromised in any way. 

## ANDRE
Competitive analysis: Find 3-4 competitive products. Present competitors’ features vs. your planned ones. First, create a table with key features of competitors vs. yours planed, only very high level, 5-6 entries max. After the table, you must summarize in one paragraph what are the planned advantages or competitive relationship of your planned product to what is already available. In the table clearly mark your product. (Consult class slides)

## ANTHONY --in progress--
High-level system architecture Briefly describe/list all main SW components, frameworks, products, APIs, tools and systems to be used, supported browsers etc. Consult and make it consistent with non-functional specs. Since you will all use LAMP stack, say it and outline main SW tools and products to be used.  Note that you must use tools and platforms specified for the class so just summarize it here for completeness.  You also have to finalize on  SW frameworks you will use (we recommend you stick with what you decided in M0 unless it needs to change which is OK too).  Any other external code must be approved by instructors and you have to justify it.

•	CakePHP framework

•	Git version control using GitHub

• 	AWS Server to deploy and host website

• 	Google Analytics

• 	LAMP stack utilizing...

	-OS: Ubuntu Server, Version: 16.04
	
	-MySQL Version: 5.7
	
	-PHP Version: 7.0.13
	
	-OpenSSH Version: 7.2
	
	-Git Version: 2.7.4
	
	-Python: 2.7
	
	-Ruby: 2.3.1
	
	-nodejs: 4.2.6
	
	-npm: 3.5.2
	
	-Less: 481
	
	-Sass: 3.4.23

• 	Supports Mozilla Firefox 50, Google Chrome 55, Internet Explorer 10, Microsoft Edge 39.14971




## HASAN

# Team: 
| Name | Role | 
| ------ | ------ |
| HASAN | Team Lead , Back End Developer |
| JORDAN | CTO , Design | 
| DARYL | GitHub Admin , Design  | 
| ANDRE | Back End Developer, Performance | 
| ANTHONY | Front End Developer  |
| HIN | Front & Back End | 


•	Team decided on basic means of communications - DONE

•	Team found a time slot to meet  outside of the class - DONE

•	CTO chosen and working out well so far - DONE

•	Github master chosen - DONE

•	Team ready and able to use the chosen framework - ON TRACK

•	Skills of each team member defined and known to all - ON TRACK

•	Team lead ensured that all team members read the  final M1 and agree/understand it before submission - ON TRACK



