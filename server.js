var express = require('express');
var sphp = require('sphp');

var app = express();
var server = app.listen(8080);

app.use(sphp.express('public/'));
app.use(express.static('public/'));