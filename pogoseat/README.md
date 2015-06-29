Corporate Website
=================

This repository contains the Pogoseat corporate website.

Overview
--------

The corporate website is currently a static website containing high-level 
information about the corporation, the product, the team, and the goals. 
The site is currently HTML, CSS, and JavaScript, built with 
[Jekyll](http://jekyllrb.com), the engine behind 
[GitHub Pages](https://pages.github.com/). 

Prerequisites
-------------

Development requires Ruby (rubygems) and [Jekyll](http://jekyllrb.com).

Installation
------------

### Linux ### 

```
(sudo) apt-get install rubygems
(sudo) gem install jekyll
```

### OSX ###

```
sudo gem install jekyll
```

Development
----------

The following will clone the repository, switch to the development branch, and
start up a Jekyll server running at http://localhost:4000

```
git clone https://github.com/pogoseat/corporate.git && cd corporate;
git checkout develop
jekyll serve --watch
```

The `--watch` flag will monitor the file system for changes and will automatically
rebuild any pages on demand. 

Run the `resolve_cdn.sh` in the `scripts` directory from the repository root directory.  This creates the correct image paths to the CDN.

```
./scripts/resolve_cdn.sh ./_site https://cdn.pogoseat.com
```

Deployment
----------

__TODO:__ Add build and deployment instructions here
