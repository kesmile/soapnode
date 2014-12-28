  var http = require('http');
  var soap = require('soap');

  var myService = {
      MTServicesService: {
          MTHTTPPort: {
              requestBalanceByEntityPattern: function(args) {
                return {
                  return: args.transactionPattern + "RESPONSE00000000"
                }
              }
              creditBalanceByEntityPattern: function (args) {
                return {
                  return: args.transactionPattern + "RESPONSE123123123123123"
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

