const Counter = require('./counter');
const request = require('request');

<!-- this is an edit-->
// const MongClient = require('mongodb').MongoClient;

// MongoClient.connect('mongodb://localhost:27017');

// promise.then(client => {
// 	console.log("Connected");
// 	const db = client.db('myproject');
// 	client.close();
// });
module.exports = People;
function People(db){
	this.collection = db.collection('people');
}


People.prototype.create = function(FirstName, LastName){
	var 
	first: FirstName;
	last: LastName;
	
}

People.prototype.delete = function(filter){

}

People.prototype.findById = function(){

}

People.prototype.findByLastName = function(lastName){
	return new Promise()
}

People.prototype.updateLastName = function(){

}