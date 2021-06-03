# Kirby

**Kirby** is a starting point for Kirby projects. It uses Kirby 3, and is adapted for a custom setup including SCSS and ES6.

## Requirements

- Node JS, Version X <https://nodejs.org/>
- NPM <https://www.npmjs.com/>
- Yarn <https://yarnpkg.com/>
- Browser Sync <https://www.browsersync.io/>
- MAMP (or a local server) <https://www.mamp.info/>
- PHP, Version X
- For Kirby requirements, see: https://getkirby.com/docs/guide/quickstart

## Installation

To clone the site to your local machine:

1. Open your terminal and navigate to the correct parent folder by running `cd PROJECT_PARENT_FOLDER`
1. Clone this repo by running `git clone https://github.com/chris-corby/kirby.git PROJECT_NAME`
1. Navigate into the new project and remove the remote by running `git remote rm origin` to keep it separate. To get a totally clean git repo (no previous commits), delete the git folder and run `git init`
1. Set up Kirby as a submodule by following instructions at https://getkirby.com/docs/cookbook/setup/git

## Development Setup

1. Install all dependencies by running `yarn install`
1. Tp update packages to their latest version (_be careful_), run `yarn upgrade-interactive --latest`. Run `yarn upgrade` to upgrade individual packages and run `yarn audit` to see if anything can be fixed
1. Update the `local_url` variable in package.json
1. Review the `browserslist` array for this project. See: https://browserl.ist/
1. Run `yarn start` to compile and watch CSS and JS files for development
1. Run `yarn run sync` to start BrowserSync for PHP files. For this to work, spin up MAMP running on localhost:8888. Open [http://localhost:3000](http://localhost:3000) in your browser to view the BrowserSync’ed output
1. Visit `/panel` on the 8888 port to set up the first user and make content changes

## Production Tasks

1. Run `yarn run build` to compile both CSS and JS files for production, or separately run `yarn run build:css` and `yarn run build:js`.
1. Run `yarn run build:js:polyfills` to compile polyfills for older browsers.

## Last Things

1. Buy a [Kirby License](http://getkirby.com/buy) when launching this project
1. Enter the location of the sitemap in `robots.txt`

## Hosting & Domain

## Updating

1. Check you are working on the correct branch
1. Check for updates to packages by running `yarn upgrade-interactive --latest`
1. Run `yarn upgrade` to upgrade individual packages
1. Check that all packages are as up to date on security releases by running `yarn audit`
1. To update the Kirby installation, run `./update.sh`

## Users

## Staging

URL:
Panel:
Username:
Password:

## Kirby 3 License

Order #: -
Date: -
Key: -
Email: -

## Contacts

## Useful Links

## Copyright and License

© 2017–present Chris Corby. All rights reserved.
