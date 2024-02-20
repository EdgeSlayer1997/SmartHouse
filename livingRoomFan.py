import RPI.GPIO as GPIO
import time
import serial
pin = 14
GPIO.setmode(GPIO.BOARD)
GPIO.setup(14, GPIO.OUT)
Valor = sys.argv[1];
while True:
	if Valor == 0:
		GPIO.output(14,GPIO.LOW);
	if Valor == 1:
		GPIO.output(14,GPIO.HIGH);
	
