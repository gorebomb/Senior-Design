#!/bin/bash

for i in {1..10}
do
	clear
	#tput cup 5 5
	date
	#tput cup 6 5
	ssh pi@10.159.41.193 'bash -s' < pic.sh
	scp pi@10.159.41.193:/home/pi/edges.jpg .
	scp pi@10.159.41.193:/home/pi/cam2.jpeg .
	sleep 5s
done

