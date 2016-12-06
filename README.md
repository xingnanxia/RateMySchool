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

1) oldStuff: 

  mid-term report,
  hello world project


2) finalSearch:

  final submission

  index.html --the main html file

  php folder: php scripts

  js: javascript sctipts

  lib: jquery library source file










  
  
