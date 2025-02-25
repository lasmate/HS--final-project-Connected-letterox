# -*- coding: cp1252 -*-
import mysql.connector
import time
import serial
from serial import Serial

ser = serial.Serial('COM6', 9600, timeout = 1)
if (ser.isOpen() == False): 						
    ser.open()

try:
    while 1:
        if ser.inWaiting()!=0 :                    # Si le port RS232 recoit des informations
            time.sleep(0.1)                         # Attente de recevoir la trame entiere
            line = ser.read(ser.inWaiting())     # lecture des informations
            ser.flushInput()                       # Effacement du buffer d'entree

            print (line)                            # Ecriture de la trame recue    
            line = line.split(";".encode('utf-8'))                # Decomposition de la trame 
            
            print (line)
            print (line[0])
            print (line[1])
            print (line[2])
            print (line[3])
            print (line[4])
            print (line[5])
            print (line[6])
                         
            conn = mysql.connector.connect(host="localhost",user="root",password="", database="boiteauxlettres")
            cursor = conn.cursor()
            cursor.execute("""insert into lettres (id, NBlettres, Plettres, Porte, Trappe, Ubat) values ( %s, %s, %s, %s, %s, %s)""",
                        ("''", line[1], line[2], line[4], line[5], line[6],)) 
            conn.close()

except KeyboardInterrupt:
    ser.close()







