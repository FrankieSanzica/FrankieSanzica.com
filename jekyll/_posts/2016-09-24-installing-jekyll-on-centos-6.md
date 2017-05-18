---
layout: post
title:  "Installing Jekyll on CentOS 6"
permalink: /:categories/:title/
excerpt_separator: "<!--more-->"
---

* Ruby and Gems:

```
yum install -y ruby ruby-devel rubygems
```

* Install Jekyll:

```
gem install jekyll
```

* Start new Jekyll project in /blog directory: 

```
jekyll new blog
```

[Jekyll Official Documentation](https://jekyllrb.com/docs/installation/)

<!--more-->
