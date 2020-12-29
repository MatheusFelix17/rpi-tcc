#!/usr/bin/env python

print("Script de acender!")

import RPi.GPIO as GPIO 
import time 

GPIO.setmode(GPIO.BOARD) 
GPIO.setup(12, GPIO.OUT) 

GPIO.output(12, 0) #ligando o pino
time.sleep(2)
#GPIO.output(12, 0) #desligando o pino
#time.sleep(2)
