var express=require('express');
var app=express();
var bcrypt = require('bcrypt');


var mysql = require("mysql");
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root",
  database: "educon"
});
con.connect(function(err){
  if(err){
    console.log('Error connecting to Db');
    return;
  }
  console.log('Connection established');
});
var bodyParser = require('body-parser')
app.use( bodyParser.json() );       // to support JSON-encoded bodies
app.use(bodyParser.urlencoded({     // to support URL-encoded bodies
  extended: true
})); 
app.use(function(req, res, next) {
  res.header("Access-Control-Allow-Origin", "*");
  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
  next();
});

app.get("/", function (req, res) {
    console.log("landing");
});
app.get('/APIEP_Signup_Username', function(req, res){
  var username = req.body.name;
  var password = req.body.password;
  
  var role=req.body.role;
  if (!username.trim() || !password.trim()) {
    res.status(500).send({ error:"One or more fields is empty!"});
  } else {
    if(role=="Student")
    {
    con.query('INSERT INTO students (Username,Password) VALUES (?,?)',[username,password],function(error,results,fields){
    if (error) {
    console.log("error ocurred",error);
    res.send({
      "code":400,
      "failed":"error ocurred"
    })
  }else{
    console.log('The solution is: ', results);
    if(results.affectedRows==1)
            console.log(JSON.stringify(results));
                res.send({
      "code":200,
      "success":"Student registered sucessfully"
        });
  }
  });

    }
    else if(role=="Donors"){
    	con.query('INSERT INTO donors (Username,Password) VALUES (?,?)',[username,password],function(error,results,fields){
    if (error) {
    console.log("error ocurred",error);
    res.send({
      "code":400,
      "failed":"error ocurred"
    })
  }else{
    console.log('The solution is: ', results);
    if(results.affectedRows==1)
            console.log(JSON.stringify(results));
                res.send({
      "code":200,
      "success":"Donors registered sucessfully"
        });
  }
  });


    }
    else if(role=="Volunteer"){
    	con.query('INSERT INTO volunteer (Username,Password) VALUES (?,?)',[username,password],function(error,results,fields){
    if (error) {
    console.log("error ocurred",error);
    res.send({
      "code":400,
      "failed":"error ocurred"
    })
  }else{
    console.log('The solution is: ', results);
    if(results.affectedRows==1)
            console.log(JSON.stringify(results));
                res.send({
      "code":200,
      "success":"Volunteer registered sucessfully"
        });
  }
  });

    }

  }
});
app.listen(8080, function () {
    console.log("listening on port 8080");
});