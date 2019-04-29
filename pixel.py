import cv2
import numpy as np

img = cv2.imread('highresedges.jpg')

for i in range(0,20):

	img[100+i,100] = [57,225,20]
	img[100,100+i] = [57,225,20]

