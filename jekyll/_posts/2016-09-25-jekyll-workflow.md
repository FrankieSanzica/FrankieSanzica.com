---
layout: post
title:  "Jekyll Workflow"
permalink: /:categories/:title/
excerpt_separator: "<!--more-->"
---

> After installing Jekyll, I was having a hard time finding a good guide online for a basic Jekyll blog workflow on a webserver (specifically CentOS 6).  This is my current workflow on a LAMP::

```
jekyll b
```

```
cd ../blog
cp -R ../jekyll/_site/* .
```
