#!/bin/sh

/usr/sbin/sshd
nginx

while (true)
do
	if ( ps -a | grep -v "grep" | grep "nginx" && ps -a | grep -v "grep" | grep "ssh" ) then
		sleep 5
	else
		exit
	fi
done
