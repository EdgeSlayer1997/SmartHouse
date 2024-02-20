import RPI.GPIO as GPIO
import time
import serial
pin = 17
GPIO.setmode(GPIO.BOARD)
GPIO.setup(17, GPIO.OUT)
Valor = sys.argv[1];
while True:
	if Valor == 0:
		GPIO.output(17,GPIO.LOW);
	if Valor == 1:
		GPIO.output(17,GPIO.HIGH);
	

