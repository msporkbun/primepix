# PrimePix

## Get Started

### Tech Stack

- Bootstrap 5
- JavaScript
- PHP
- MySQL
- AJAX

## Project Description

PrimePix is a web application that allows users to discover and save their favorite movies.
The application provides a search feature for users to find content based on their preferences.
Users can create wish lists to keep track of their favorite items.
The application also includes a promotion list for new arrivals and special offers.
Users can rate and review products and provide feedback through a form.
The application also includes a user account page for managing reviews and account details.

### Key Features

- [ ] Extensive Selection
  - [ ] A broad collection of Amazon Prime Movies, including various genres and categories.

- [ ] User Ratings and Reviews
  - [ ] Registered users can rate movies on a scale
  - [ ] Registered users write detailed reviews to share their opinions and insights with the community.

- [ ] User Registration and Profiles
  - [ ] Secure user registration
  - [ ] Profile management functionalities
    - [ ] Allow users to create accounts
    - [ ] Manage their profiles
  - [ ] Track their activities
    - [ ] Reviews
    - [ ] Favourite movies

- [ ] Search and Filtering Options
  - [ ] Advanced search capabilities will enable users to find specific movies based on:
    - [ ] title
    - [ ] genre
    - [ ] rating
    - [ ] release year

- [ ] Responsive Design
  - [ ] The website will feature responsive design
    - [ ] desktop
    - [ ] tablets
    - [ ] mobile

- [ ] Social Sharing Integration
  - [ ] Users can share on social media platforms:
    - [ ] movie details
    - [ ] reviews
    - [ ] recommendations

- [ ] Security and Data Privacy
  - [ ] Encryption of
    - [ ] user passwords
    - [ ] personal information

- [ ] Favorite List Management
  - [ ] Users can:
    - [ ] create
    - [ ] manage lists

- [ ] Trending and Featured Movies
  - [ ] Highlighting on the Homepage of:
    - [ ] trending movies
    - [ ] new releases
    - [ ] top-rated films

- [ ] Admin Dashboard
  - [ ] A backend dashboard for administrators to:
    - [ ] manage user accounts
    - [ ] monitor site activity
    - [ ] moderate user-generated content
    - [ ] perform system maintenance tasks.

- [ ] SEO Optimization
  - [ ] Implement SEO best practices

### Design Assets

[Wireframe](https://www.figma.com/design/N2NYwyl2n3oynpQuwptPgf/Advanced-Web-Wireframes)

#### Pages

<details>
  <summary>User Profile Page</summary>

  ![User Profile Page](docs/wireframes/user_profile_page.svg)
</details>

<details>
  <summary>Sign Up Page</summary>

  ![Sign Up Page](docs/wireframes/sign_up_page.svg)
</details>

<details>
  <summary>Movie Review Page</summary>

  ![Movie Review Page](docs/wireframes/movie_review_page.svg)
</details>

<details>
  <summary>Sign In Page</summary>

  ![Sign In Page](docs/wireframes/sign_in_page.svg)
</details>

<details>
  <summary>Landing Page</summary>

  ![Landing Page](docs/wireframes/landing_page.svg)
</details>

## Assignment

### Feature Requirements

- [ ] Home Page
  - [ ] Display random products from the collection
  - [ ] Implement a navigation menu with dropdowns where necessary
  - [ ] Ensure smooth navigation between pages

- [ ] Categories to Filter Collection by Genre
  - [ ] Set up product categories (e.g., Comics, Romance, Thriller, Fiction, Non-fiction)
  - [ ] Implement category filters for browsing products
  - [ ] Ensure dynamic filtering and UI updates based on selected genres

- [ ] Detailed Product View
  - [ ] Display detailed product information (e.g., title, synopsis, director, writer, main stars)
  - [ ] Implement a review submission form
  - [ ] Include options for submitting reviews with basic validation
  - [ ] Test product view for usability and completeness

- [ ] User Registration and Sign-in Functionality
  - [ ] Implement a user registration form with validation
  - [ ] Set up a secure sign-in system
  - [ ] Handle authentication and sessions for logged-in users
  - [ ] Test for security vulnerabilities (e.g., password encryption, input sanitization)

- [ ] Product Rating System
  - [ ] Implement a star rating, Likert Scale, or another rating method
  - [ ] Ensure ratings are stored and displayed correctly
  - [ ] Allow users to update or delete their ratings

- [ ] Search Functionality
  - [ ] Implement a search bar to search for products by name or keywords
  - [ ] Ensure relevant results are displayed based on search queries
  - [ ] Handle search input errors and empty results gracefully

- [ ] Favorite Products List
  - [ ] Allow users to add products to a favorites list
  - [ ] Implement options to manage (add/remove) items in the favorites list
  - [ ] Ensure favorite lists are user-specific and persist across sessions

- [ ] User Account Page
  - [ ] Implement a user account dashboard
    - [ ] Allow users to view and manage their reviews
    - [ ] Include options to update account details (email, password, username)
  - [ ] Ensure account updates are securely handled
  - [ ] Test for data integrity and security

- [ ] Project Submission Requirements
  - [ ] Include all project source code and assets in the submission folder
  - [ ] Export the database as a `.sql` file for easy setup
  - [ ] Review project for completeness and functionality before submission

### Rubric Criteria

| Criteria                                                                      | Points |
| ----------------------------------------------------------------------------- | ------ |
| Implementation and demonstration of a wish/favorite list                      | 15     |
| Implementation and demonstration of a search functionality                    | 15     |
| Asynchronous Data                                                             | 10     |
| Implementation and demonstration of promotion list                            | 10     |
| Implementation and demonstration of Products' rating/review and feedback form | 10     |
| Implementation of a user account page                                         | 10     |
| Source code repository and website hosting                                    | 10     |

### Rubric Criteria Breakdown

- [ ] Implementation and demonstration of a wish/favorite list
  - [ ] Create a functioning user-generated wish/favorite list
    - [ ] Ensure list works without errors
    - [ ] Include error handling for invalid inputs
    - [ ] Implement basic UI for adding/removing items
  - [ ] Test for functionality and user experience

- [ ] Implementation and demonstration of a search functionality
  - [ ] Implement a content discovery search feature
    - [ ] Ensure search results are accurate and relevant
    - [ ] Handle various search queries (e.g., partial matches)
    - [ ] Display search results neatly
  - [ ] Test for usability and error handling

- [ ] Implementation of asynchronous data
  - [ ] Use Ajax for asynchronous data requests
    - [ ] Implement at least two AJAX requests for updating content
    - [ ] Handle successful and failed requests appropriately
  - [ ] Test for smooth updates and content rendering

- [ ] Implementation and demonstration of promotion list
  - [ ] Create a list for promotions/new arrivals
    - [ ] Implement a functioning promotions list
    - [ ] Include multiple promotion types (books, movies, etc.)
  - [ ] Ensure list updates dynamically
  - [ ] Test for accuracy and consistency

- [ ] Implementation of products’ rating/review and feedback form
  - [ ] Create a product review system
    - [ ] Allow users to submit reviews with ratings
    - [ ] Display reviews correctly
  - [ ] Implement a feedback form
    - [ ] Handle form submission and data storage
  - [ ] Test review and feedback features for bugs

- [ ] Implementation of a user account page
  - [ ] Create a user account management page
    - [ ] Allow users to view and manage their reviews
    - [ ] Include options to update account details (email, password, username)
  - [ ] Ensure all functions work smoothly
  - [ ] Test for data consistency and security

- [ ] Source code repository and website hosting
  - [ ] Set up a GitHub repository for the project
    - [ ] Maintain consistent commits with clear messages
    - [ ] Test GitHub deployment on a live server
  - [ ] Host the project on a live server
    - [ ] Ensure live server deployment is error-free
