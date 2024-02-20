import RPi.GPIO as GPIO

pin = 12
GPIO.setmode(GPIO.BCM)
GPIO.setup(12, GPIO.OUT) 
GPIO.output(12,GPIO.LOW)