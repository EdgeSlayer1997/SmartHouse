import RPi.GPIO as GPIO

pin = 25
GPIO.setmode(GPIO.BCM)
GPIO.setup(25, GPIO.OUT) 
GPIO.output(25,GPIO.LOW)