const express = require('express');
const router = express.Router();
const Student = require('../models/Student');

// ADD student
router.post('/add', async (req, res) => {
const student = new Student(req.body);
await student.save();
res.send('Student Added');
});

// VIEW students
router.get('/view', async (req, res) => {
const students = await Student.find();
res.json(students);
});

// UPDATE student
router.put('/update/:id', async (req, res) => {
await Student.findByIdAndUpdate(req.params.id, req.body);
res.send('Student Updated');
});

// DELETE student
router.delete('/delete/:id', async (req, res) => {
await Student.findByIdAndDelete(req.params.id);
res.send('Student Deleted');
});

module.exports = router;