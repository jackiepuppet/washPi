#!/usr/bin/env python3
import time
import RPi.GPIO as GPIO


isVibrating = false
isRunning = false
lastVibrate = time.time()

lastCycle_start
lastCycle_stop

sensor_pin = 3

#seconds to check if still vibrating after first detection
start_window = 30
stop_window =  60


def vibrated:

# if vibrating and its been vibrating for more than  qa window, set  isrunning true
#update last vibrate time to now
#if not  vibrating and  

#while vibrating
	#lastVibrate = time.time
	#sleep start window
	#if vibrating
		#is Running = true
		#lastCycle_start = time.time
return




GPIO.add_event_detect(sensor_pin, GPIO.RISING)
GPIO.add_event_callback(sensor_pin, vibrated)




