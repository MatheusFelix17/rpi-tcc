#!/usr/bin/env python

import RPi.GPIO as GPIO 
import time
import sys

a = int(sys.argv[1])

GPIO.setmode(GPIO.BOARD) 
GPIO.setup(a, GPIO.OUT) 

GPIO.output(a, 1) #desligando o pino
