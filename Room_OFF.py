import RPi.GPIO as GPIO

pin = 19
GPIO.setmode(GPIO.BCM)
GPIO.setup(19, GPIO.OUT) 
GPIO.output(19,GPIO.LOW