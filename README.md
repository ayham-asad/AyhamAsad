![site-banner](https://github.com/sneaker01/AyhamAsad/assets/72168348/8498e40d-77f9-45e5-aa15-943d59cf4659)

## Features

- Responsive across device sizes
- Dark & light mode
- Smooth animation
- Fast loading (<90KB), unnecessary CSS and JavaScript files not delivered in production
- Easy customization using just a configuration file

## Installation

Requirements: You need PHP (>= 8), Composer, Node.js along with NPM, or another package manager installed on your local machine.

- Clone or download this repository
- Install dependencies with `composer install` and `npm install`
- Now, you can preview the site with `npm run watch`
- Finally, you can run `npm run prod` to compile the assets file if you have finished modifying the site

## Configuration

To replace all the content on the site, you can modify the [`config.php`](./config.php) file. You can also override any configuration you write in [`config.php`](./config.php) when run in a production environment via the [`config.production.php`](./config.production.php) file. See [here](https://jigsaw.tighten.com/docs/building-and-previewing-environments/) for more details.

## Deployments

Since the end result of this application is static HTML, CSS, and JavaScript. So, you can use a free service for hosting static sites like Github Pages or Netlify. See [here](https://jigsaw.tighten.com/docs/deploying-your-site/) for more documentation.

## Technologies Used

- Static site generator: [Jigsaw](https://jigsaw.tighten.com/)
- Frontend framework: [Tailwind CSS](https://tailwindcss.com/)
- Icons: [Font Awesome](https://fontawesome.com/), [Simple Icons](https://simpleicons.org/)
- Animations: [Swiper.js](https://swiperjs.com/), [Typed.js](https://mattboldt.com/demos/typed-js/), [Tippy.js](https://atomiks.github.io/tippyjs/)

## Credits
