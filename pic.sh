#!/bin/bash

echo "Taking Picture..."
raspistill -w 225 -h 225 -q 100 -vf -hf -o cam2.jpeg
python3 edgeDetect.py
