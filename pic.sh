#!/bin/bash

echo "Starting scripts..."
raspistill -vf -hf -o cam2.jpeg
python3 edgeDetect.py
