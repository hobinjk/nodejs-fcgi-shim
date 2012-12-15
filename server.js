var http=require('http');

http.createServer(function (req, res) {
	req.on('end', function () {
		res.writeHead(200);
		res.end();
	});
}).listen(process.argv[2]);
