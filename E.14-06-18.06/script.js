function oblicz()
        {
            var box = document.getElementById("box");
            var km = document.getElementById("km").value;
            var koszt=0;

            if(box.checked==true)
            {
                document.getElementById("wynik").innerHTML = "Dowieziemy Twoją pizzę za darmo";
            }
            else
            {
                koszt = km*2;
                document.getElementById("wynik").innerHTML = "Dowóz będzie Cię kosztował "+koszt+" złotych";
            }
        }