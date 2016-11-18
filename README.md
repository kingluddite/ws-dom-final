# WordPress Custom Theme Final Project

Convert DOMsters site into a WordPress custom theme.

**Note**

When you have JavaScript point to an image, you run into a path issue. The bad solution is to hardcode a path to your image inside your theme. This is bad because you have to a really long file path. Here is a better solution where we use a way that WordPress recommends just for this type of situation.

[source for local javascript fix](http://stackoverflow.com/questions/5221630/wordpress-path-url-in-js-script-file)

## Instructions
Let's install all our packages:
We are installing dev dependencies like `gulp` and dependencies like normalize.

`$ npm install`

### Run gulp

`$ gulp`
This will allow us to watch Sass and use browser-sync to update our browser on the fly. Try it out. Make a change to any of the `.scss` files and you will see your Custom theme update in real time. A much better way to develop. Don't you think?

### Run gulp build (only for production)

`$ gulp build`

If you were ready to push your site to the staging or production server, use this command and all your files will be optimized. You just need to make sure your paths are all correct (because they are inside the `build` folder). At some point you will need to push your site to production, so I just wanted to introduce you to a way to use Gulp to streamline this process for you.

