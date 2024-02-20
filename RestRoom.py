import RPi.GPIO as GPIO

pin = 5
GPIO.setmode(GPIO.BCM)
GPIO.setup(5, GPIO.OUT) 
GPIO.output(5,GPIO.HIGH)
