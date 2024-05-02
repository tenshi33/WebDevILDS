const express = require('express');
const AWS = require('aws-sdk');
const path = require('path');

const app = express();
const port = process.env.PORT || 3000;

app.use(express.static(path.join(__dirname, '..', 'client', 'public')));

app.use(express.json());
app.use(express.urlencoded({ extended: false }));

app.use((req, res, next) => {
    res.status(404).send("Sorry, the page you're looking for doesn't exist.");
});

app.get('/', (req, res) => {
    res.redirect('/home');
});

app.get('/home', (req, res) => {
    res.sendFile(path.join(__dirname, '..', 'client', 'public', 'index.html'));
});

// Configure AWS SES
const ses = new AWS.SES({ region: 'Asia Pacific (Singapore)' }); // Replace 'YOUR_REGION' with your AWS region

app.post('/send-email', (req, res) => {
    const { name, email, subject, message } = req.body;

    const params = {
        Destination: {
            ToAddresses: ['angeloegwaras@gmail.com'] // Replace with your recipient email address
        },
        Message: {
            Body: {
                Text: { Data: `From: ${name}\nEmail: ${email}\nSubject: ${subject}\nMessage: ${message}` }
            },
            Subject: { Data: subject }
        },
        Source: 'ilodigitalsolution@gmail.com' // Replace with your verified email address in SES
    };

    ses.sendEmail(params, (error, data) => {
        if (error) {
            console.error(error);
            res.status(500).send('Failed to send email');
        } else {
            console.log('Email sent:', data);
            res.status(200).send('Email sent successfully');
        }
    });
});

app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
