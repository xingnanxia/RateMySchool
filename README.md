# Rate My Colleges
project-xingnanxia created by GitHub Classroom

This is a website that allows international students to rate and write reviews about their colleges abroad. 

Client-side technologies used are HTML, CSS, and Javascript; Server-side technologies used are php and mySQL. 


## Usage
The user can review all the schools in the database by clicking the 'Colleges' button. The user can either choose a school on the dropdown list directly or type part of the school name to narrow down the search. 

Then, the user can view all the reviews and updated rating for 9 different categories: Engineering, Computer Science, Math and Finance, After Graduation, Professional Support, Food, Financial Aid and Scholarship, Campus Inclusivity, and Overall Experience. 

The user can also submit his/her own rating by hovering over the starts field, and submit his/her own review. After that, the user need to click some other buttons and go back to see the updated rating/reviews. 

The ratings are calculated by keeping records of ratingCount and ratingAverage for every category in the database. Everytime a user submits a new review, the following codes are excuted to update the related entries in the database:

ratingAverage= (ratingAverage*ratingCount+ newRating )/ (ratingCount+1)

ratingCount++;

## Authors 

Xingnan Xia, Zhe Wang 

## Browser Support 

This component has been tested in the following brosers: 
 ![Chrome](https://raw.githubusercontent.com/alrra/browser-logos/master/chrome/chrome_48x48.png)  ![Safari](https://raw.githubusercontent.com/callmenick/browser-logos/master/safari/safari_48x48.png) 


## Citations

1) Five Stars Rating: 
  https://github.com/callmenick/five-star-rating.git
  
2) Dropdown menu: 
http://www.w3schools.com/howto/howto_js_dropdown.asp


##  File Description

1) oldStuff folder: 

  mid-term report,
  hello world project


2) finalSearch folder:

  `final submission`

  `index.html` --the main html file (including some javascripts, css, html)

  `php folder`: php scripts 

  `js folder`: javascript scripts (src/rating.js is cited)

  `lib folder`: jquery library source file (cited)

  `css folder`: defined style for five stars (cited)
  
  `img folder`: supply image for five stars (cited)
  

## Local Testing & Database 

    In order to set up database, we used phpMyAdmin on MAMP. We created a database called "universities". There are two tables in the database: "collge_rating" and "reviews". "college_rating" table has id, name, description and all the ratings and counts for each college; while "reviews" table stores all reviews, each has id, country, year, review, field and school. 
    The following are some screenShots of the database: 
    
 
    We used MAMP for local testing. To do that, simply download MAMP. In 'preferences', set Apache Port, Nginx Port to 80 and MySQL port to 3306, and then drag the downloaded finalSearch folder into Applications/MAMP/htdocs. Then, type 'localhost/finalSearch' in your web browser to use the website.







  
  
