  var http = require('http');
  var soap = require('soap');

  var myService = {
      TransactionService: {
          TransactionServicePort: {
              requestBalanceByEntityPattern: function(args) {
                return {
                  return: args.transactionPattern + "requestResponse00000000"
                }
              },
              creditBalanceByEntityPattern: function (args) {
                return {
                  return: args.transactionPattern + "creditResponse123123123123123"
                }
              },
              reverseBalanceByEntityPattern: function (args){
                return {
                  return: args.transactionPattern + "reverseResponse123123123123123"
                }
              }
              
          }
      }
  }

  var xml = require('fs').readFileSync('./esquema.wsdl', 'utf8'),
      server = http.createServer(function(request,response) {
          response.end("404: Not Found: "+request.url)
      });


  server.listen(8000);
  soap.listen(server, '/wsdl', myService, xml);
  console.log('work');

