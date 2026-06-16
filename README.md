# QuickSilk - Web Assets

## Getting Started
Install [Node.js](https://nodejs.org/en/download) and package dependencies:
```
npm install --force
```

## Clone Additional Git Repositories
* [MagpieUI](https://github.com/SerDIDG/MagpieUI) as `libs/common`
* [QuickSilk-Application](https://github.com/SerDIDG/QuickSilk-Application) as `libs/application`

```
git submodule update --init --recursive
```

## Development
* `npm run watch` — starts the file watcher
* `npm run optimize` — creates a full optimized build

When editing the application submodule, remember to bump the version in `libs/application/package.json` before committing.

To preview content while the watcher is running, use `index.html`.