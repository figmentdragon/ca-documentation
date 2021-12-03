'use strict';
const fs = require('fs');
const packageJSON = require('../package.json');
const upath = require('upath');
const sh = require('shelljs');

module.exports = function renderPages() {

    const sourcePath = upath.resolve(upath.dirname(__filename), '../src/pages');
    const destPath = upath.resolve(upath.dirname(__filename), '../dist/');

    sh.cp('-R', sourcePath, destPath)

};
