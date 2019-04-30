#!/bin/bash

echo "Taking Picture..."
raspistill -w 1000 -h 1000 -q 100 -vf -hf -o highrescam2.jpeg
python3 edgeDetect.py
