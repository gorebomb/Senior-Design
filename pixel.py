import cv2
import numpy as np

img = cv2.imread('highresedges.jpg')

print(img[700,700])

"""

for i in range(0,300):

	img[500+i,500] = [57,225,20]
	#print(img[700+i,700])
	img[500,500+i] = [57,225,20]
	#print(img[700,700+i])
#cv2.imwrite('highresedges.jpg')

"""

img[565:600, 565:600] = (57,225,20)
cv2.imshow('title', img)
cv2.waitKey(0)
#cv2.destroyWindow(img)
