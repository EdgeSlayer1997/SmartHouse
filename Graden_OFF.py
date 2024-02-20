import RPi.GPIO as GPIO

pin = 23
GPIO.setmode(GPIO.BCM)
GPIO.setup(23, GPIO.OUT) 
GPIO.output(23,GPIO.LOW)