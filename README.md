# WordPress Custom Theme Final Project

Convert DOMsters site into a WordPress custom theme.

### Ingredients Inside this Project
* node (package manager)
* Sass (pre-processor)
* git (version control)
* gulp (build tool with browser-sync)
* php (server side language)
* shell script (for backups)
* WordPress (cms)
* sql (database)
* JavaScript
* susy (grids)
* breakpoint (responsive)
* typi (responsive typography)

## Instructions

### WP-CLI
Install WordPress into your Server folder (we set up MAMP to point to our Mac `Sites` folder.) I created a folder and named it 'ws-dom-final'. This name is important because it is used in the database you will be importing. Make sure you name your folder the same so the paths will be correct.

### Database
Look inside the `stuff-you-need` folder. Create a database in MySQL named 'ws_dom_final' and import the SQL file into that database. I was using MAMP.

### Uploads
If you look at the photos folder you will see the images are broken for the thumnails. This is because they are inside the uploads folder. I placed this folder inside the `stuff-you-need` folder. Grab the folder and place it directly inside the `wp-content` folder. Since you just installed WordPress, you can delete their `uploads` folder and replace it with the `uploads` folder in this repo.

I added these images to the `media` of WordPress because they are not theme dependent, no matter what theme you use, you should have access to these images. That's why they are in the `uploads` folder.

### NPM and our Packages
Let's install all our packages:
We are installing dev dependencies like `gulp` and dependencies like normalize.

`$ npm install`

### Use Gulp as our build tool

Run gulp with this simple command:

`$ gulp`

This will allow us to watch Sass and use browser-sync to update our browser on the fly. Try it out. Make a change to any of the `.scss` files and you will see your Custom theme update in real time. A much better way to develop. Don't you think?

### Run gulp build (only for production)
In a real world scenario, you would use gulp to build your final files for your live site. After you create this folder, you would then push it to your staging server or production server depending on your workflow.

`$ gulp build`

If you were ready to push your site to the staging or production server, use this command and all your files will be optimized. You just need to make sure your paths are all correct (because they are inside the `build` folder). At some point you will need to push your site to production, so I just wanted to introduce you to a way to use Gulp to streamline this process for you.

**Note**

When you have JavaScript point to an image, you run into a path issue. The bad solution is to hardcode a path to your image inside your theme. This is bad because you have to a really long file path. Here is a better solution where we use a way that WordPress recommends just for this type of situation.

[source for local javascript fix](http://stackoverflow.com/questions/5221630/wordpress-path-url-in-js-script-file)



