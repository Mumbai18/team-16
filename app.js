

const express = require('express');
const bodyp = require('body-parser');
const app = express();
const bcrypt = require('bcrypt-nodejs');
const cors = require('cors');

app.use(bodyp.json());
app.use(cors());


app.listen(3000, ()=> {
    console.log('app is running in port 3000');
})


app.post('/register',(req,res) =>{
    const { email, name, password } = req.body;
    
    // bcrypt.hash(password, null, null, function(err, hash){
    //             console.log(hash);
    //  });
    database.users.push({
        id: '125',
        name: name,
        email: email,
        password: password,
        entries: 0,
        joined: new Date() 
    })
    res.json('success');
   // res.json(database.users[database.users.length-1]);
})