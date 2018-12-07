var  account =
    {
        AccountTitle:"Rakhshi Malik",
        AvailableBalance : "500000",
        AccountCurrence : "PAk",
        IBAN :"123345667789",


        deposit:function (x) {
            var deposit = document.getElementById("deposit");
            var balance  = document.getElementById("balance");
            balance = deposit + balance;
        },

        withdraw:function (y) {

            var withdraw = document.getElementById("withdraw");
            var balance  = document.getElementById("balance");
            balance = withdraw - balance;
        },

        display:function() {
            document.getElementById("title").innerHTML = this.AccountTitle;
            document.getElementById("balance").innerHTML = this.AvailableBalance;
            document.getElementById("currency").innerHTML = this.AccountCurrence;
            document.getElementById("IBAN").innerHTML = this.IBAN;
            console.log(2);
        }

    };

account.display();