#!/bin/bash

scp pi@10.159.41.193:/home/pi/Downloads/srDesign/Senior-Design/edges.jpg .

#expect "pi@10.159.41.193's password:\r"
#send -- "raspberry\r"

scp pi@10.159.41.193:/home/pi/Downloads/srDesign/Senior-Design/cam2.jpeg .

#expect "pi@10.159.41.193's password:\r"
#send -- "raspberry\r"

read -p "enter count num: " count
echo $count

mv edges.jpg ./edges/$count.jpg
mv cam2.jpeg ./pic/$count.jpeg
