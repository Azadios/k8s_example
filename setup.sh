#!/bin/bash

minikube start 	--driver=docker
minikube addons enable metallb
minikube addons enable dashboard
eval $(minikube docker-env)

printf "🧩  Building images\n"
printf "⏲️   ftps...\n"
docker build -t ftps:my ./srcs/ftps >> /dev/null
printf "⏲️   mysql...\n"
docker build -t mysql:my ./srcs/mysql >> /dev/null
printf "⏲️   wordpress...\n"
docker build -t wordpress:my ./srcs/wordpress >> /dev/null
printf "⏲️   phpmyadmin...\n"
docker build -t phpmyadmin:my ./srcs/phpmyadmin >> /dev/null
printf "⏲️   grafana...\n"
docker build -t grafana:my ./srcs/grafana >> /dev/null
printf "⏲️   influxdb...\n"
docker build -t influxdb:my ./srcs/influxdb >> /dev/null
printf "⏲️   nginx...\n"
docker build -t nginx:my ./srcs/nginx >> /dev/null
printf "🏁  Done!\n"

kubectl apply -f ./srcs/PVs.yaml >> /dev/null
kubectl apply -f ./srcs/metallb.yaml >> /dev/null

kubectl apply -f ./srcs/ftps/ftps.yaml >> /dev/null
kubectl apply -f ./srcs/mysql/mysql.yaml >> /dev/null
kubectl apply -f ./srcs/wordpress/wordpress.yaml >> /dev/null
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml >> /dev/null
kubectl apply -f ./srcs/grafana/grafana.yaml >> /dev/null
kubectl apply -f ./srcs/influxdb/influxdb.yaml >> /dev/null
kubectl apply -f ./srcs/nginx/nginx.yaml >> /dev/null

minikube dashboard
