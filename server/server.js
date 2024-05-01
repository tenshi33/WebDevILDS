// server/server.js

const express = require('express');
const nodemailer = require('nodemailer');
const path = require('path');

const app = express();
const port = process.env.PORT || 3000; 


app.use(express.static(path.join(__dirname, '..', 'client', 'public')));

// Middleware 
app.use(express.json());
app.use(express.urlencoded({ extended: false }));



app.get('/', (req, res) => {
    res.redirect('/home');
});

app.get('/home',(req,res)=>{
    res.sendFile(path.join(__dirname, '..', 'client', 'public', 'index.html'));
});


app.post('/send-email', (req, res) => {
    const { name, email, subject, message } = req.body;

    const transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
            user: 'hernandezlnathaniel@gmail.com',
            pass: 'bmjksqyqqbvavylj'
        }
    });

    const mailOptions = {
        from: name,
        to: 'hernandezlnathaniel@gmail.com',
        subject: subject,
        text: message
    };


    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            console.log(error);
            alert("error")
            res.status(500);
        } else {
            console.log('Email sent: ' + info.response);
            alert("Email sent")
            res.status(200);
        }
    });
});

app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
