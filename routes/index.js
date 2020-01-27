var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Cadastro de Clientes' });
});

/* GET new client. */
router.get('/new', function(req, res, next) {
  res.render('new', { title: 'Novo cadastro' });
});

/* GET find client. */
router.get('/find', function(req, res, next) {
  res.render('find', { title: 'Consultar' });
});

/* POST new page. */
router.post('/new', function(req, res, next) {
  var nome = req.body.nome;
  require("../db").saveCustomer(nome, function(){res.redirect("/"); })
});

module.exports = router;
