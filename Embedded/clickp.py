import serial
from vpython import *
import cv2
import os
import numpy as np
import shutil
import time
import shutil, os

arduinoSerialData = serial.Serial('/dev/ttyACM0', 9600)
video=cv2.VideoCapture(0)
check,frame = video.read()
# cam = cv2.VideoCapture(0)
# cv2.namedWindow("test")
# img_counter=0

cam=Device()
path="C:\\Users\\kapoo\\Pictures\\Camera\ Roll\\"
while (1==1):  #Create a loop that continues to read and display the data
	if (arduinoSerialData.inWaiting()>0):  #Check to see if a data point is available on the serial port
		myData = int(arduinoSerialData.readline()) #Read the distance measure as a string and convert to int
		if myData == 5:
			print(myData) 
            img_name="opencv_frame_{}.jpg".format(0)
            cv2.imwrite(img_name,frame)
            shutil.copy(img_name,"C:\\Users\\sunil\\Pictures\\Camera Roll\\")
            video.release()
            cv2.destroyAllWindows()

            cam.saveSnapshot("123.jpg")
            time.sleep(500)
			#load test images
			for j in os.listdir(path):
				count += 1
				print(j)
			