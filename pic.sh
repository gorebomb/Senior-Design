#!/bin/bash

<<<<<<< HEAD
echo "Starting scripts..."
echo "raspberry" | sudo -S raspistill -w 225 -h 225 -q 100 -vf -hf -o cam2.jpeg
=======
echo "Taking Picture..."
raspistill -w 1000 -h 1000 -q 100 -vf -hf -o highrescam2.jpeg
>>>>>>> 65ec8e38054d3cb9b13414cd2cc8daac3945ff9e
python3 edgeDetect.py
