# import serial
# from vpython import *

import cv2
import os
import numpy as np
import shutil
import time
import os

video=cv2.VideoCapture(0)
check,frame = video.read()
# cv2.imshow("Capturing",frame)
# key=cv2.waitKey(1)
img_name="opencv_frame_{}.jpg".format(0)

f=open("2.txt","w")
f.write("hello writg")

cv2.imwrite(img_name,frame)
print(img_name)
shutil.copy(img_name,"C:\\Users\\sunil\\Pictures\\Camera Roll\\")
video.release()
cv2.destroyAllWindows()