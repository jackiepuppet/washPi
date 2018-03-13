#!/usr/bin/python

import os
import time
#import MySQLdb
import mysql.connector



#db = MySQLdb.connect(host="localhost", db="wash_DB")

#cur = db.cursor()

#try:
#	x.execute("""INSERT INTO main VALUES   

# /var/lib/mysql/wash_DB


db = mysql.connector.connect(database='wash_DB')
cursor = db.cursor()



add_data = ("INSERT INTO main "
	   "(status, lastend, start,) "
	   "VALUES (%s, %s, %s, %s)")

test_data =  
cursor.execute(add_data)
