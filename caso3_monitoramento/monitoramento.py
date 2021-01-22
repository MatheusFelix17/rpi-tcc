import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from email.mime.image import MIMEImage
from email.mime.application import MIMEApplication
import os
import webbrowser
import RPi.GPIO as GPIO
import time 

GPIO.setmode(GPIO.BOARD)
GPIO.setup(11, GPIO.IN)                        #Seta porta 11 como porta a receber o sinal de entrada

sender_email = "remetente@gmail.com"           #Seta os emails que enviarão e receberão a imagem obtida
receiver_email = "destinatario@gmail.com"

msg = MIMEMultipart()
msg['Subject'] = 'Movimentação detectada!'     #Seta o título que será exibido no email enviado
msg['From'] = sender_email
msg['To'] = receiver_email
    
body = "Movimentação detectada!"               #Seta a mensagem do corpo do email
msg.attach(MIMEText(body))
    
         
while(1):                                      #Programa fica em um laço infinito e quando uma movimentação é detectada dispara os seguintes comandos
    time.sleep(1)
    
    if (GPIO.input(11) == GPIO.HIGH):
        
        os.system("sudo service motion restart")      #Configura e inicializa o programa para começar a streamar
        os.system("sudo motion")
        webbrowser.open("http://192.168.0.75:8081/")  #Abre uma pagina web com o endereço IP do Raspberry pi e inicia a transmissão remota

        os.system("scrot -d10 captura.jpg")           #Captura a imagem obtida e a armazena
        
        with open('captura.jpg', 'rb') as fp:         #Anexa a imagem obtida no corpo do email
            img = MIMEImage(fp.read())
            img.add_header('Content-Disposition', 'attachment', filename="captura.jpg")
            msg.attach(img)
        
   
        try:
                with smtplib.SMTP('smtp.gmail.com', 587) as smtpObj:   #Email é enviado para o destinatário
                    smtpObj.ehlo()
                    smtpObj.starttls()
                    smtpObj.login("remetente@gmail.com", "senha")
                    smtpObj.sendmail(sender_email, receiver_email, msg.as_string())