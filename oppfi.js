// Property of Anthony Krivonos and Mary Karroqe of OPPFI
// OPPFI Website Javascript

var CLOSED = 0, OPEN = 1;
var BLUR = 0, UNBLUR = 1;
var commentStatus = CLOSED;
var EMAIL = 0; COMMENT = 1;

function blurImg (act)
{
      var centerIMG = document.getElementById("centerimg");
      if (act == BLUR)
      {
            centerIMG.setAttribute("style", "display: block; position: relative; width: 110%; margin-left:-10px; transition: all 1s ease; transition: all .5s ease; -webkit-filter: blur(5px); -moz-filter: blur(5px); -ms-filter: blur(5px); filter: blur(5px);");
      }
      if (act == UNBLUR)
      {
            centerIMG.setAttribute("style", "display: block; position: relative; width: 110%; margin-left:-10px; transition: all 1s ease; transition: all .5s ease; -webkit-filter: blur(0px); -moz-filter: blur(0px); -ms-filter: blur(0px); filter: blur(0px;");
      }
}

function send (act)
{
      if (act == EMAIL)
      {
            var fromIndexer = document.getElementById('from');
            if (fromIndexer.value.indexOf("@") == -1 && fromIndexer.value.indexOf(".") == -1)
            {
                  mailFailure("Please insert a valid email address.", EMAIL);
                  return;
            }
            mailFailure("close", EMAIL);
            document.getElementById('email').submit();
            return;
      }
}

function mailFailure (message, act)
{
      if (act == EMAIL)
      {
            if (message == "close")
            {
                  document.getElementsByClassName("error")[0].style.display = "none";
                  document.getElementsByClassName("error")[0].innerHTML = "";
                  return;
            }
            document.getElementsByClassName("error")[0].style.display = "block";
            document.getElementsByClassName("error")[0].innerHTML = message;
      }
}
