#!/bin/bash

#for i in {1..10}
#do
	clear
	#tput cup 5 5
	date
	#tput cup 6 5
	ssh pi@10.159.41.193 'bash -s' < pic.sh
	scp pi@10.159.41.193:/home/pi/highresedges.jpg .
	scp pi@10.159.41.193:/home/pi/highrescam2.jpeg .
	python3 pixel.py
	python3 example.py	
	sleep 5s
#done

#file_name1=highresedges
#file_name2=highrescam2
 
#current_time=$(date "+%Y.%m.%d-%H.%M.%S")
 
#new_fileName1=$file_name1.$current_time.jpg

#mv highresedges.jpg ~/Downloads/srDesign/Senior-Design/highresedges.jpg

#new_fileName2=$file_name2.$current_time.jpeg

#mv highrescam2.jpeg ~/Downloads/srDesign/Senior-Design/highrespics/$new_fileName2
