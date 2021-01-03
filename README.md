# k8s_example
School21's project on kubernetes. Some decisions may seem odd, but they were made to fulfill school's subject excactly as it requires.
Unfortunately, according to school21 rules, i can't upload subject itself, but i fully describe this project below.

## Software
You'll need minikube and docker. Probably last versions should do it. Honestly i don't remember requirments :) 

## Launching
Just run *setup.sh*. It'll build docker images and deploy them onto local k8s cluster. After all work is done it'll open for you dashboard, so you can easily navigate through your cluster.

## Whatchayagot?
It's a cluster of microservices. Load-balanced by metallb. Also it has persistent volumes, so your data won't lost on failure.
Microservices list:
* ftps
* mysql
* wordpress
* phpmyadmin
* grafana
* influxdb
* nginx
