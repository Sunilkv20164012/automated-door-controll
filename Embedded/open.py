
import serial 
import time
f=open("1.txt","w")
f.write("hello writing")

arduino = serial.Serial('COM4', 9600)

f=open("2.txt","w")
f.write("hello writing")

# onOffFunction()
print("The LED is on...")
time.sleep(1) 
arduino.close()
arduino.open()
arduino.write(1)
# time.sleep(2000)
# arduino.write(2)
f=open("trial.txt","w")
f.write("hello writing")
#"L".encode('utf-8')