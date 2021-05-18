document.body.style.backgroundColor = "#f9ebea";
        let ngjyrat = ["#fbeee6", "#fadbd8", "#ebedef", "#fdedec"];
        let i = 0;
        let ndryshoNgjyrat = () =>
        {
            document.body.style.backgroundColor = ngjyrat[i];
            if (i == (ngjyrat.length)) {
                i = 0;
            }
            i++;
        }
        setInterval(ndryshoNgjyrat, 4000);

