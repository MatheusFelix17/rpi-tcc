import RPi.GPIO as GPIO 
import time 

GPIO.setmode(GPIO.BOARD) 
GPIO.setup(12, GPIO.OUT) 

while True:
    GPIO.output(12, 1) #ligando o pino
    print("Acendeu!")
    time.sleep(2)
    GPIO.output(12, 0) #desligando o pino
    print("Apagou!")
    time.sleep(2)
