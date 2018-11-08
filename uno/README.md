# Uno Starter Theme
A starter framework for Genesis child themes which includes starter SCSS files and a Gulp task file which automates:

1. JS compression
2. SCSS compiling and compression
3. File watching
4. Generation of a POT file for translation
5. Autoloading directories
6. Composer support

<hr/>

## About Uno
Uno is the official starter child theme by Genesis Pro Tools.
The goal of the project is to create a starter theme for Genesis Framework developers that doesn't over-bloat their starting base, while including commonly used templates, codes, and styles, and which includes common Gulp development tasks.

Useful Links:
- [Changelog](#changelog)

## License
This starter theme is free to use as you wish. GPL licensing allows for you to hack it however you wish, no credit needed.

### Reasons to Use Uno
- It comes accessible out of the gate.
- It's mobile-first.
- It's a completely blank slate, save for typical styling to imply structure, and basic theme support options that should be included in most themes.
- It has almost **zero** styling, reducing visual influence on your projects.
- It comes with a ready-to-use, ultra-easy responsive menu script.

<hr/>

## What the Gulp Automation Does
- The Gulp task file will watch dev files under `/assets/` in the SCSS/JS directories and rebuild files on the fly.
- **Note:** To separate dev from production files, the task manager will output minified files to a `/dist/` folder at the theme root (except in the case of the main `/scss/` folder, which will be compiled the `./style.css`).
- File naming will stay the same with minified copies using `.min.ext` appended to the file name.

<hr/>

## Changelog
= 1.0.0 =
- First Release.
