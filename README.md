# QuickSilk - Web Assets

## Getting Started
Install [Node.js](https://nodejs.org/en/download) and package dependencies:
```
npm install
```

## Development
* `npm run watch` — starts the file watcher
* `npm run optimize` — creates a full optimized build

To preview content while the watcher is running, use `index.html`.

## Release process
1. Change versions in the `package.json` and `composer.json` in the edited submodule and parent repositories.
    * For minor changes edit the third number of the version: was 3.0.0, will be 3.0.1.
    * For major changes edit the second number of the version: was 3.1.1, will be 3.2.0.
2. Run `npm run optimize` to build both submodule and parent repositories.
3. Commit and push the submodule repository.
4. Commit and push the parent repository.

## Git Submodules
* [MagpieUI](https://github.com/SerDIDG/MagpieUI) as `libs/common`
* [QuickSilk-Application](https://github.com/SerDIDG/QuickSilk-Application) as `libs/application`
