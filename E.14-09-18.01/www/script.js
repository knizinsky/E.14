function oblicz()
        {
            var pol = parseFloat(document.getElementById("polak").value);
            var now = parseFloat(document.getElementById("nowak").value);
            var rys = parseFloat(document.getElementById("rysik").value);

            var najmniejsza=0;

            if(isNaN(pol)&&isNaN(now)&&isNaN(rys))
            {
                document.getElementById("wynik").innerHTML = "wpisz poprawne dane";
            }
            else
            {
                najmniejsza = Math.min(pol,now,rys);
                document.getElementById("wynik").innerHTML = najmniejsza;
            }

            
        }