---
title: "Grav in Docker"
date:   12/28/2015
taxonomy:
    tag: [sysadmin, dev]
image: splash.jpg
---

I made a thingy. The last thing I needed to move away from Dokku completely and into the wonderful life of Docker.

This blog is made in Grav ([http://getgrav.org/](http://getgrav.org/)), it was a mess to deploy to Dokku (I had to include the full source or write a buildpack for it) and I wanted to leave Dokku behind me to run Docker for everything. To solve this I created a Docker image for Grav. It's nothing special but it works rather well.

It can be used in two ways, either you run the image and mount a folder (`grav/user`) where you edit your posts and themes etc and it will be reflected as soon as you refresh your browser (I use this now when I'm writing this post). You could also use it to pull down your `user`-folder every X minutes to updated posts from a git repository or similar.

The other way you can use it is to bundle you app with and push it to a repository (how this blog is server, see [https://hub.docker.com/r/benjick/maxmalm.se-grav/](https://hub.docker.com/r/benjick/maxmalm.se-grav/)). Every time I push this repo to Github the Docker hub is alerted and creates a new image. Then on my server I check for new images every X minutes and download it if it's newer (I'll write a post about it sometime later).

It's not perfect yet, it doesn't work too well if you don't supply your own `user`-folder but I'll fix it soon enough. In the meantime you can just create a new Grav-application from a skeleton.

Full code and readme at [https://github.com/benjick/docker/tree/master/grav](https://github.com/benjick/docker/tree/master/grav)

And if you want to see how I use it for this blog check out [https://github.com/benjick/maxmalm.se-grav](https://github.com/benjick/maxmalm.se-grav)
