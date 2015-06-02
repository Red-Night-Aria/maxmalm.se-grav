---
title: "From Meteor to www"
date:   1/12/2015
taxonomy:
    tag: [dev, meteor]
---

Instead of just deploying your app to meteor.com we might want to host it ourselves so we get full control of everything to backups to uptime.

I'm going to show you how to use MUP (Meteor UP) to deploy to a VPS of your choice - in this case Digital Ocean ([$10 referral link to get you started](https://www.digitalocean.com/?refcode=36ba60ad6e89))

## 1. Prerequisites 

For information, this is all done on a Windows client (8.1) using the standard CMD. What I've installed is the following:

* Meteor for Windows - http://warehouse.meteor.com/windows/install-meteor-0.0.27.exe
* Node.js - http://nodejs.org/

If you don't have a meteor app yet you can download an example to try this out with.

```
meteor create --example todos
cd todos
meteor
```

## 2. VPS

For this example I've just created a new clean droplet with Ubuntu 14.04. 

Create a user for your meteor installs - `adduser meteor` and log in as that user

## 3. MUP
Now we need to install MUP. Do it with `npm install mup`

In your project file, run mup init

`cd todos`
`mup init`

This will create two files, `mup.json` and `settings.json`. `mup.json` is the file we are going to take a look at.

