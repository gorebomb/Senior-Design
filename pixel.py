import cv2
import numpy as np

img = cv2.imread('highresedges.jpg')

#print(img[700,700])

"""

for i in range(0,300):

	img[500+i,500] = [57,225,20]
	#print(img[700+i,700])
	img[500,500+i] = [57,225,20]
	#print(img[700,700+i])
#cv2.imwrite('highresedges.jpg')

"""



#img[387:411, 599:670] = (57,225,20)
#cv2.imshow('title', img)
#cv2.waitKey(0)


#cv2.destroyWindow(img)

import json

def writeToJsonFile(path, fileName, data):
	filePathNameWExt = './' + path + '/' + fileName + '.json'
	with open(filePathNameWExt, 'w') as fp:
		json.dump(data, fp)


def isFull(x1,y1,x2,y2):
	count = 0
	for i in range(x1,x2):
		for j in range(y1,y2):
			if np.all(np.greater(img[j,i], np.array([200,200,200]))):
				count += 1

	print(count )
	if count > 1:
		return 1
	else:
		return 0



def isFull2(x1,y1,x2,y2):
	count = 0
	for i in range(x1,x2):
		for j in range(y1,y2):
			if np.all(np.greater(img[j,i], np.array([200,200,200]))):
				count += 1
			else:
				print(img[j,i])
	print(count )
	if count > 1:
		return 1
	else:
		return 0

#print(isFull(689,757,699,758))

def fun(x1,y1,x2,y2):
	img[y1:y2, x1:x2] = (57,225,20)




#fun(155-3,288,167+3,343)
#fun(199,270,216,332)
#fun(242,274,266,332)
#fun(289,267,315,325)
#fun(343,257,373,314)
#fun(394,251,421,318)
#fun(148,391,166,446)
#fun(189,385,208,451)
#fun(236,378,258,445)
#fun(283,363,312,435)
#fun(338,362,367,442)
#fun(390,360,421,436)
#fun(146,560,170,628)
#fun(191,556,219,632)
#fun(236,549,267,630)
#fun(287,547,318,627)
#fun(336,545,372,624)
#fun(393,542,429,621)
#fun(157+5,674,185-5,725)
#fun(201+5,671,227-5,738)
#fun(245+5,674,278-5,740)
#fun(293+5,671,330-5,742)
#fun(347,674,382-5,749)
#fun(401,674,437-5,743)
#fun(599,336,670,359)
#fun(716,337,782,360)
#fun(599,387,670,411)
#fun(721,389,785,415)
#fun(604,443,676,462)
#fun(727,444,788,466)
#fun(607,503,684,520)
#fun(727,497,792,517)
#fun(612,558,680,578)
#fun(728,552,781,570)
#fun(613,615,681,632)
#fun(730,609,792,627)


cv2.imshow('title', img)
cv2.waitKey(0)




path = './'
fileName = 'data'
data = {}
data[1] = isFull(155-3,288,167+3,343)
data[2] = isFull(199,270,216,332)
data[3] = isFull(242,274,266,332)
data[4] = isFull(289,267,315,325)
data[5] = isFull(343,257,373,314)
data[6] = isFull(394,251,421,318)
data[7] = isFull(148,391,166,446)
data[8] = isFull(189,385,208,451)
data[9] = isFull(236,378,258,445)
data[10] = isFull(283,363,312,435)
data[11] = isFull(338,362,367,442)
data[12] = isFull(390,360,421,436)
data[13] = isFull(146,560,170,628)
data[14] = isFull(191,556,219,632)
data[15] = isFull(236,549,267,630)
data[16] = isFull(287,547,318,627)
data[17] = isFull(336,545,372,624)
data[18] = isFull(393,542,429,621)
data[19] = isFull(157+5,674,185-5,725)
data[20] = isFull(201+5,671,227-5,738)
data[21] = isFull(245+5,674,278-5,740)
data[22] = isFull(293+5,671,330-5,742)
data[23] = isFull(347,674,382-5,749)
data[24] = isFull(401,674,437-5,743)
data[25] = isFull(599,336,670,359)
data[26] = isFull(716,337,782,360)
data[27] = isFull(599,387,670,411)
data[28] = isFull(721,389,785,415)
data[29] = isFull(604,443,676,462)
data[30] = isFull(727,444,788,466)
data[31] = isFull(607,503,684,520)
data[32] = isFull(727,497,792,517)
data[33] = isFull(612,558,680,578)
data[34] = isFull(728,552,781,570)
data[35] = isFull(613,615,681,632)
data[36] = isFull(730,609,792,627)

writeToJsonFile(path, fileName, data)
