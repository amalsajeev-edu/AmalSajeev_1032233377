const express = require('express');
const mongoose = require('mongoose');
const cors = require('cors');

const app = express();

// middleware
app.use(express.json());
app.use(cors());

// connect MongoDB
mongoose.connect('mongodb://127.0.0.1:27017/portfolio')
.then(() => console.log("MongoDB Connected"))
.catch(err => console.log(err));

// routes
const studentRoutes = require('./routes/studentRoutes');
app.use('/student', studentRoutes);

// start server
app.listen(5000, () => {
console.log('Server running on port 3000');
});