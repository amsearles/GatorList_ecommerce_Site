## GatorList Test Plan for QA

### Objectives:
 The purpose of this test is to find any bugs and to make sure our product is working up to standards. This test focuses on the search function of our product. We want to make sure the search works correctly by showing the correct items that the user searches for.


### Hardware Setup: 
Testing will be done on a laptop and desktop, both running windows. Also on a laptop running Ubuntu 16.04.

### Software Setup: 

Testing will be done of the site using multiple browsers running the lastest versions: Firefox, Chrome, and Safari. The actual product is hosted on aws server running a LAMP stack. Our current state of the product is in the early beta stage.

### Feature to be Tested:

Our site utilizes a search function to show similar products that the user searches for. We will test if the product actually shows up and if all the categories are working correctly when chosen. The expected time of the test is about 15-30 minutes of running the different test cases.

### Risks
One risk is that the connection to our site might be interrupted during testing. A contigency we have in place for this is to have a copy of our site hosted locally so that the user can test without interruptions.


### Test Cases
1.) The user shall be able to search for a 'math book' and have it displayed in the results of the chosen category. The user is already logged in and on the homepage of the site. After the user searches, the user shall logout and search again for the same product. This is to determine whether the search function works consistently whether the user is logged in or out.
1. User navigates to the search bar.
2. User types in 'math book' and selects ALL as a category
3. Site displays the expected output
4. User logs out of site and navigates to the home page
5. User repeats step 2
6. Site displays the expected output

2.) The user searches for glasses on multiple pages. This is to check if search is working on all pages of our site
1. User navigates to the home page and searches for glasses in 'ALL' categories
2. User then searches on the results page for the same product
3. Lastly, user searchs on the sell page and see if the results are consistent with the previous cases

3.)This final test case is to check corner cases of our database. In our database with we have a 'math book', a 'math hat' and a 'math cup'.The expected results should be that the user is only shown the product of a specific category.


1.User navigates to the home page

2.User searches for 'math' in the books category. Expected Output: Only 'math book' is shown

3.User searches for 'math' in the furniture category. Expected Output: Only 'math cup' is shown

4.User searches for 'math' in the apparel category. Expected Output: Only 'math hat' is shown

5.User searches for 'math' in the 'ALL' category. Expected Output: 'math book', 'math cup', and 'math hat' is shown.

| Test # 	|                                           Description                                                                                                                                           	| Input       	|                                       Expected Output                                                                                                                                                                                                                                                                                                                                                         	| PASS/FAIL 	| NOTES |
|--------	|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	|-------------	|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	|-----------	|
| 1      	| A logged in user searches for 'math book' in 'all' categories at different pages.  User then logs out and searches for 'math book' in 'all' categories                                          	| 'math book' 	| Only math books are shown Results should be consistent between a user that is logged in or out.                                                                                                                                                                                                                                                                                                               	| (PASS)  | Meets "Expected Output" QA specification, but I expected the images to load. There seems to be a problem loading png format images. Searching functionality works as expected. Identical results while searching as a registered user vs guest. Teted on latest version of Firefox and Chrome (on Ubuntu 16.04LTS).
| 2      	| Logged in user searches for 'glasses'  in homepage. User then searches for 'glasses' on the results page. Lastly user searches for 'glasses' one the sell page.                                 	| 'glasses'   	| Results are consistent on each page by showing the products for 'glasses'                                                                                                                                                                                                                                                                                                                                                                                                           	|(FAIL)|Glasses were successfully listed after the search from the home page, as well as the results page. But directs me to a "Database Error" page while searching from the "Sell" page. Error persists in the latest versions of Firefox and Chrome (on Ubuntu 16.04LTS).|
| 3      	| In our database we have a 'math book', a 'math hat' and a 'math cup'. The expected results should be that the user is only shown the product of a specific category and not any other category. 	| 'math'      	| User searches for 'math' in the books category.  Expected Output: Only 'math book' is shown  User searches for 'math' in the furniture category. Expected Output: Only 'math cup' is shown  User searches for 'math' in the apparel category.  Expected Output: Only 'math hat' is shown  User searches for 'math' in the 'ALL' category.  Expected Output: 'math book', 'math cup', and 'math hat' is shown. 	|(FAIL)|Obtained expected results for searching "math" in "Books" and "Furniture" from the home page, but failed to find a category option from the dropdown list for "Apparel", which fails step (4). The "All" category works as expected. Teted on latest version of Firefox and Chrome (on Ubuntu 16.04LTS).|



