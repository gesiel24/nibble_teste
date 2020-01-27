var nodemailer = require('nodemailer');

var remetente = nodemailer.createTransport({
    host: 'smtp.gmail.com',
    service: '',
    port: 587,
    secure: false,
    auth:{
    user: 'techxsolar@gmail.com',
    pass: 'Pretoebranco1*'}
    });
  
  var content = {
    from: 'techxsolar@gmail.com',
    to: 'larissa@nibbletecnologia.com.br',
    subject: 'Novo Cliente Cadastrado',
    text: 'Novo cliente X Solar Tech cadastrado com sucesso!  ---  Teste Nibble Gesiel Finger',
    };
  
  remetente.sendMail(content, function(error){
    if (error) {
    console.log(error);
    } else {
    console.log('E-mail enviado com sucesso.');
    }
    });

//email();

//module.exports = function email()
