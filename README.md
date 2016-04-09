Kanboard Markdown WYSIWYG Editor Plugin
=======================

----

_Note: It's no longer in active development, and it's part of the Kanboard core since version 1.0.27._

----

This plugin overrides core comment textareas and extends it with common shortcuts like bold, italic.

Installation
------------

- Create a directory **wysiwyg** under the folder **plugins**
- Copy all source files in this new directory
- Go on your local installation of Kanboard
- After the login, you should see the alterations to the default layout

# Dependencies
 
[pagedown](https://github.com/ujifgc/pagedown)
 
# Installation
 
Create a directory **"wysiwyg"** in the kanboard/plugins directory. It is important to use that exact name!  
[Download the Sourcecode](https://github.com/sebastiantiede/kanboard-plugin-wysiwyg/archive/master.zip)
Extract the **source files** into the created directory.
 
Install **Bower** with NPM.
1. Download [NodeJS/NPM](https://nodejs.org/).
2. Use NPM to install Bower: `$ npm install -g bower` - [Additional help](https://www.npmjs.com/package/bower)
3. Install [Git](https://git-scm.com/downloads)
 
Install the **bower.json** with Bower. This will install pagedown:
1. `bower install`
 
## Done!
