const mongoose = require('mongoose');

const StudentSchema = new mongoose.Schema({
name: String,
email: String,
course: String
});

module.exports = mongoose.model('Student', StudentSchema);