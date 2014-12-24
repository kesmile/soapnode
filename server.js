  var http = require('http');
  var soap = require('soap');
  
  var myService = {
      MTServicesService: {
          MTHTTPPort: {
              requestBalanceByEntityPattern: function(args) {
                var result = parseInt(args.a) + parseInt(args.b);
                
                  return {
                      return: "00000000000000"
                  }
              }
          }
      }
  }

  var xml = require('fs').readFileSync('esquema.wsdl', 'utf8'),
      server = http.createServer(function(request,response) {
          response.end("404: Not Found: "+request.url)
      });
  

  server.listen(8000);
  soap.listen(server, '/wsdl', myService, xml);
  console.log('work');
  
