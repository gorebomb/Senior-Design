#!/bin/bash

ssh pi@10.159.41.193 'bash -s' < pic.sh
scp pi@10.159.41.193:/home/pi/edges.jpg .
scp pi@10.159.41.193:/home/pi/cam2.jpeg .

#exit
