
# Roofiant Frontend Documentation

## 1. Project Overview

Roofiant is a web application for a roofing company. It allows users to learn about the company, its services, view past projects, and contact the company.

## 2. Technologies Used

*   **Laravel:** A PHP web application framework.
*   **Blade:** Laravel's templating engine.
*   **Tailwind CSS:** A utility-first CSS framework.
*   **JavaScript:** For interactive elements.

## 3. Project Structure

The frontend-related files are primarily located in the `resources` and `public` directories.

*   **`resources/views`:** Contains the Blade templates for the application's UI.
    *   **`pages`:** Contains the main pages of the application.
    *   **`components`:** Contains reusable UI components.
*   **`resources/css`:** Contains the application's CSS files.
*   **`resources/js`:** Contains the application's JavaScript files.
*   **`public`:** Contains the compiled assets and other public files.
    *   **`css`:** Contains the compiled CSS files.
    *   **`js`:** Contains the compiled JavaScript files.
    *   **`images`:** Contains the images used in the application.

## 4. Pages

The application consists of the following pages:

*   **Home (`/`):** The landing page of the application. It features a prominent hero section with a headline, a brief introduction to the company, and a list of key features. It also includes sections for "Who We Are", "What We Do", customer testimonials, recent projects, and a call-to-action.
    *   **Components:** `home/hero`, `home/who`, `home/what`, `home/promise`, `home/cta`, `home/financing`, `home/testimonial`, `home/projects`, `home/explore`, `home/how`, `home/counter`
*   **About (`/about`):** Provides information about the company.
    *   **Components:** `about/story`, `about/mission`, `about/persons`, `about/choose`, `about/feedback`, `about/area`, `about/schedule`, `about/ready`
*   **Services (`/services`):** Describes the services offered by the company.
    *   **Components:** `services/categories`, `services/choose`, `services/explore`
*   **Roof Repair (`/roof-repair`):** Provides information about the roof repair service.
    *   **Components:** `roof-repair/one`, `roof-repair/two`, `roof-repair/choose`, `roof-repair/process`, `roof-repair/bfaf`, `roof-repair/faq`
*   **Financing (`/financing`):** Explains the financing options available.
    *   **Components:** `financing/finance`, `financing/promo`, `financing/benefits`, `financing/tiers`, `financing/explain`
*   **Service Area (`/service-area`):** Shows the areas served by the company.
    *   **Components:** `service-area/one`, `service-area/two`, `service-area/choose`, `service-area/lists`
*   **Team (`/team`):** Introduces the company's team members.
*   **Testimonials (`/testimonials`):** Displays customer testimonials.
*   **Contact (`/contact`):** Provides a contact form and other contact information.
*   **Products (`/products`):** Showcases the products used by the company.
*   **Blogs (`/blogs`):** A blog section with articles.
    *   **`blogs/index`:** The main blog page.
    *   **`blogs/details`:** The details page for a single blog post.
*   **Projects (`/project`):** A gallery of past projects.
    *   **`project/index`:** The main projects page.
    *   **`project/details`:** The details page for a single project.

## 5. Components

The application uses a variety of reusable components to build the UI. These components are located in the `resources/views/components` directory.

### 5.1. Common Components

*   **`common/header`:** The header of the application.
*   **`common/footer`:** The footer of the application.
*   **`common/bread-crumb`:** A breadcrumb navigation component.
*   **`common/form`:** A reusable form component.

### 5.2. Home Page Components

*   **`home/hero`:** The hero section of the home page. It displays a large background image with a headline, a brief introduction to the company, and a list of key features. It also includes a client avatar stack and a "1.5k+ Clients" badge.
*   **`home/who`:** This section provides a brief introduction to the company, highlighting its values and commitment to customer satisfaction. It features a collage of images and a list of key strengths, such as being a licensed and insured company, having a high customer rating, and offering free inspections.
*   **`home/what`:** This section showcases the company's main services: Residential Roofing, Commercial Roofing, and Siding Roofing. Each service is presented in a card with an icon, a title, a brief description, and a "View Details" link.

### 5.3. Page-Specific Components

The components are organized into subdirectories based on the page they are used in. For example, the components used on the home page are located in the `resources/views/components/home` directory.

## 6. Assets

The static assets for the application are located in the `public` directory.

*   **`public/images`:** Contains all the images used in the application.
    *   **`about`:** Images for the about page.
    *   **`before-after`:** Before and after images of projects.
    *   **`posts`:** Images for blog posts.
    *   **`projects`:** Images for projects.
    *   **`services`:** Images for services.
*   **`public/css/app.css`:** The main CSS file for the application.
*   **`public/js/app.js`:** The main JavaScript file for the application.
