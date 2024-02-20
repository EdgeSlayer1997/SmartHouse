import sys
import serial
import time

ser = serial.Serial("/dev/ttyACM0", 9600)
livingRoomLED = sys.argv[1];

if livingRoomLED == '0':
    for a in range (5):
        ser.write(str(livingRoomLED).encode())
        ser.write('\n'.encode())
        ser.flushInput()
        time.sleep(0.2)
        
elif livingRoomLED == '1':
    for a in range (5):
        ser.write(str(livingRoomLED).encode())
        ser.write('\n'.encode())
        ser.flushInput()
        time.sleep(0.2)
