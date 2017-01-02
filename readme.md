#Trip sorter Algorithm Implementation
This project is developed for sorting boarding cards in proper sorting order in keeping view the source and next destination.

##Features

- Import boarding cards information from a JSON file
- Convert the JSON string to array.
- Sort the array in valid sorting order with approximately n^2 sorting complexity.
- Display/Print the proper sorting Order.
- Checking the validity of all code by test cases implementation (via phpunit framework).

##Installation

At the project root run

```
composer update
```

After composer installation 

View the Algorithm output via **{YourServerURL}/index.php** url in browser.

Check the test cases output via following commands in cmd prompt/git bash 

- bin/phpunit --bootstrap tests/bootstrap.php tests/ParserTest.php
- bin/phpunit --bootstrap tests/bootstrap.php tests/SorterTest.php

##Screenshots
View the images for sorting algorithm and test cases output <a href="https://github.com/faisalsiddiq87/propertyFinder/tree/master/screenshots">here</a>.

##Note
I have broke the <a href="http://promo.propertyfinder.ae/devtest/">Trip Sorter Problem</a> in to source, destination and other seating info and created a JSON file for storing all the boarding cards information.
All the implementation is done via OOP PHP as per the requirement without any framework usage (only phpunit framework was used for test cases). 
All code done is properly commented and PSR-2 coding standards are followed.
Name spacing approach and PSR-4 auto-loading standard are used for loading all files in project.