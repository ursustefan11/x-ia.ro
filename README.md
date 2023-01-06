# Exponential | x-ia.ro
Blog build using php MVC **(Laravel v6.2 Framework)** and **Bulma (CSS Framework)**

## App/Http/Controllers
Each controller manages a function of the website. Here's a brief description of each controller.
### BlogController
- Retrieve data from database, sort descending based on timestamp and send it to View.
### CategoriesController
- Add, edit or remove categories.
### CategoryPostController
- Used for adding posts to categories.
### ManageController
- Used for viewing admin dashboard.
### PermissionController
- Creating, managing and deleting permissions attributed to a role.
### PostController
- Create, edit and delete posts.
### RoleController
- Used for creating roles - administrator, editor, user.
### UserController
- Creating, managing and deleting user accounts.

## Resources
### Resources/assets
- Contains uploaded post images.
### Resources/js
- Contains frameworks(Vue.js), libraries(Buefy) and custom JS scripts like manage.js(scripts for admin dashboard) and helpers.js(script for animated dropdown navigation bar)
### Resources/sass
- CSS files.
### Resources/views - Blade templates.
- Used to display all information on website. Works like a standalone .HTML file.