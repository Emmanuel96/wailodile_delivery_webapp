const Nexmo = require('nexmo');

const nexmo = new Nexmo({
  apiKey: 'API_KEY',
  apiSecret: 'API_SECRET'
});

const from = 'Nexmo';
const to = +2347037699184;
const text = 'This is a text message';

nexmo.message.sendSms(from, to, text, (error, response) => {
  if(error) {
    throw error;
  } else if(response.messages[0].status != '0') {
    console.error(response);
    throw 'Nexmo returned back a non-zero status';
  } else {
    console.log(response);
  }
});