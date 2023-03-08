from flask import Flask, render_template, request
from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, TextAreaField, TextField, RadioField, SelectField, FileField, IntegerField, DateField, validators
from wtforms.fields.html5 import EmailField
from wtforms.validators import InputRequired
import smtplib,os
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from email.mime.base import MIMEBase
from email import encoders
from flask_sqlalchemy import SQLAlchemy
from datetime import datetime, timedelta
from wtforms.ext.sqlalchemy.fields import QuerySelectField
from werkzeug import secure_filename
from flask_mail import Mail, Message 

app = Flask(__name__)
db = SQLAlchemy(app)

app.debug=True

app.config['SECRET_KEY'] = 'Thisisasecret!'
APP_ROOT = os.path.dirname(os.path.abspath(__file__))
UPLOAD_FOLDER = os.path.join(APP_ROOT)


app.config.update(
    DEBUG=True,
    MAIL_SERVER='smtp.gmail.com',
    MAIL_PORT=465,
    MAIL_USE_SSL=True,
    MAIL_USERNAME='alexmoses994@gmail.com',
    MAIL_PASSWORD='134Alex558'
    )
mail=Mail(app)

     


class My2Form(FlaskForm):
    fname = StringField('* First name',[validators.InputRequired(), validators.Length(max=20)])
    lname = StringField('* Last name',[validators.InputRequired(), validators.Length(max=20)])
    email = EmailField('* Email',[validators.InputRequired(), validators.Email()])
    subject = TextField('* Subject',[validators.InputRequired(), validators.Length(max=50)])
    message = TextAreaField('* Message',[validators.InputRequired(), validators.Length(max=1000)])

@app.route('/')
def index():
    return render_template('index.php')

@app.route('/ServiceTopographic.php')
def Services_topo():
    return render_template('ServiceTopographic.php')    

@app.route('/ServiceAerial.php')
def Services_Aerial():
    return render_template('ServiceAerial.php')


@app.route('/ServiceArchitecture.php')
def Services_Architecture():
    return render_template('ServiceArchitecture.php')               

@app.route('/ServiceGIS.php')
def Services_GIS():
    return render_template('ServiceGIS.php') 

@app.route('/ServiceConstruction.php')
def Services_construction():
    return render_template('ServiceConstruction.php')

@app.route('/BingSiteAuth.xml')
def bing_verification():
    return render_template('BingSiteAuth.xml')

@app.route('/sitemap')
def sitemap():
    return render_template('sitemap.xml')    

@app.route('/contact.php', methods=['GET', 'POST'])
def contact():
    contact = My2Form()
    if request.method == 'POST':
    	if contact.validate_on_submit():
            nameF=contact.fname.data
            nameL=contact.lname.data
            emailI=contact.email.data
            subjectI=contact.subject.data
            messageI=contact.message.data
            try:
                msg=Message(subjectI, sender='AlexmoserAM21@gmail.com', recipients=['geosurveylk@gmail.com'])
                msg.body='Thank you very much for contacting us \n'+'Name : '+nameF+' '+nameL+'\n Email :'+emailI+'\n'+'Message : '+messageI
                mail.send(msg)
                return render_template('confirmation.php',contact=contact)
            except Exception as e:
                return str(e)
    return render_template('contact.php',contact=contact)

@app.route('/joinus.php', methods=['GET', 'POST'])
def registration():
    return render_template('joinus.php')

              

if __name__=="__main__":
    app.run(debug=False,host='0.0.0.0') 



