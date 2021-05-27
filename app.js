const express = require("express")
const port = 3000
//const mongo = require('./utils/db');

// This method runs once and connects to the mongoDB
/**var db;
async function loadDBClient() {
	try {
		db = await mongo.connectToDB();
	}catch(err){
		throw new Error('Could not connect to the Mongo DB');
	}
};  
loadDBClient();**/

const app = express()

// This method is executed every time a new request arrives.
// We add the variable db to the request object, to be retrieved in the route req object
/**app.use((req, res, next) => {
	req.db = db;	
	next();
});**/
app.use(express.json())

app.use(express.static(__dirname + '/view'));

server = app.listen(port, () => {
	console.log('Example app listening at http://localhost:%d', port);
});
  
process.on('SIGINT', () => {
	console.info('SIGINT signal received.');
	//console.log('Closing Mongo Client.');
	//mongo.closeDBConnection();
	server.close(() => {
	  console.log('Http server closed.');
	});
 });

