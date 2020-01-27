//---------Configuração banco de dados remoto MongoDB---------

var mongoClient = require("mongodb").MongoClient;
mongoClient.connect("mongodb://gesiel:pretoebranco@geonosis.mongodb.umbler.com:50667/solartech",  //string de conexão com erro
    function (err, conn) {
        if (err) return console.log(err);
        globaldb = conn;
    })

function saveCustomer(nome, callback) {
    global.db.collection("customers").insert({ nome }, function (err, result) {
        if (err) return console.log(err);
        callback();
    })
}

module.exports = { saveCustomer }; //não funcionou