#!/bin/sh

telegraf &
influxd run -config /etc/influxdb.conf &

sleep 5

while (true)
do
    if ( ps -a | grep -v "grep" | grep "telegraf" && ps -a | grep -v "grep" | grep "influxd" ) then
        sleep 5
    else
    	exit
    fi
done
