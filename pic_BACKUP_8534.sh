#!/bin/bash

<<<<<<< HEAD
echo "Starting scripts..."
echo "raspberry" | sudo -S raspistill -w 225 -h 225 -q 100 -vf -hf -o cam2.jpeg
=======
echo "Taking Picture..."
raspistill -w 1000 -h 1000 -q 100 -vf -hf -o highrescam2.jpeg
>>>>>>> 8338f7cd86c829bc91920866e9c0a851b01bcd5c
python3 edgeDetect.py
